<?php
/*******************************************************************************
 *
 *  filename    : UpdateAllLatLon.php
 *  last change : 2013-02-02
 *  website     : http://www.churchdb.org
 *
 *  LICENSE:
 *  (C) Free Software Foundation, Inc.
 *
 *  ChurchInfo is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful, but
 *  WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 *  General Public License for more details.
 *
 *  http://www.gnu.org/licenses
 *
 ******************************************************************************/


require "Include/Config.php";
require "Include/Functions.php";

require "Include/GeoCoder.php";

require "Include/Header.php";

// Lookup unknown coodinates first.  To do this set latitude = -99 for
// every unknown record.
$sSQL = "UPDATE family_fam SET fam_Latitude = 0 WHERE fam_Latitude IS NULL";
RunQuery($sSQL);

$sSQL = "UPDATE family_fam SET fam_Latitude = -99 WHERE fam_Latitude = 0";
RunQuery($sSQL);

// ORDER BY fam_Latitude forces the -99 records to the top of the queue
$sSQL =  "SELECT fam_ID, fam_Name, fam_Address1, fam_City, fam_State, fam_Zip, fam_Latitude, fam_Longitude ";
//$sSQL .= "FROM family_fam ORDER BY fam_Latitude";

// Need to come back and fix this someday. Server timeouts are a problem.
// It just takes too long to do a lookups for a large database.
// For now am limiting to 250 lookups.
$sLimit = 1250;

$sSQL .= "FROM family_fam ORDER BY fam_Latitude LIMIT $sLimit";

$rsFamilies = RunQuery($sSQL);

// Return the -99 records back to 0
$sSQL = "UPDATE family_fam SET fam_Latitude = 0, fam_Longitude = 0 WHERE fam_Latitude = -99";
RunQuery($sSQL);

$myAddressLatLon = new AddressLatLon;

// If the users database is large this loop does not finish before something times out.
// This results in an ungraceful ending when $sLimit is large.
// At least the unknown coordinates are first in the queue.
while ($aFam = mysql_fetch_array($rsFamilies)) {
    extract ($aFam);

    $myAddressLatLon->SetAddress ($fam_Address1, $fam_City, $fam_State, $fam_Zip);
    $ret = $myAddressLatLon->Lookup ();
        
    if ($ret == 0) {

            $sNewLatitude = $myAddressLatLon->GetLat ();
            $sNewLongitude = $myAddressLatLon->GetLon ();
            if ($sNewLatitude === NULL) {
                $sNewLatitude = 0;
            }
            // if a lookup returned zero skip this.  Don't overwrite with 0,0
            if ($sNewLatitude != 0) {
        echo "<p>" . $fam_Name, " Latitude " .  $sNewLatitude . " Longitude " . $sNewLongitude . "</p>";
        $sSQL = "UPDATE family_fam SET fam_Latitude='" . $sNewLatitude . "',fam_Longitude='" . $sNewLongitude . "' WHERE fam_ID=" . $fam_ID;
        RunQuery ($sSQL);
            }
    } else {
        echo "<p>" . $fam_Name . ": " . $myAddressLatLon->GetError () . "</p>";
    }
    flush ();
}
echo '<p>' . gettext('Update Finished') . '</p>';

$sSQL =  "SELECT fam_ID, fam_Name, fam_Address1, fam_City, fam_State, fam_Zip, fam_Latitude, fam_Longitude ";
$sSQL .= "FROM family_fam WHERE fam_Latitude = 0";
$rsFamilies = RunQuery ($sSQL);
while ($aFam = mysql_fetch_array($rsFamilies)) {
    extract ($aFam);
    echo "<p> No coordinates found for " . $fam_Name . " " . $fam_Address1 .
    "," . $fam_City . "," . $fam_State . "," . $fam_Zip . "</p>";
}
ob_flush ();
?>
