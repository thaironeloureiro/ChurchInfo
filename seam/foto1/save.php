<?php
//This project is done by vamapaull: http://blog.vamapaull.com/

if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
	$jpg = $GLOBALS["HTTP_RAW_POST_DATA"];
	$img = $_GET["img"];
	$filename = "images/ibmares_". mktime(). ".jpg";
	file_put_contents($filename, $jpg);
} else{
	echo "Encoded JPEG information not received.";
}
?>