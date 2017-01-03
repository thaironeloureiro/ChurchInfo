<?  
$cod=$_GET[cod];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>IBMares.org - SEAM    - Foto</title>

<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" />

</head>
<body>

<input type="hidden" id="cod" name="cod" value="<?=$cod?>">


<div id="photos"></div>

<div id="camera">
	<span class="tooltip"></span>
	<span class="camTop"></span>
    
    <div id="screen"></div>
    <div id="buttons">
    	<div class="buttonPane">
        	<a id="shootButton" href="" class="blueButton">Fotografar</a>
        </div>
        <div class="buttonPane hidden">
        	<a id="cancelButton" href="" class="blueButton">Cancelar</a>
					<a id="uploadButton" href="" class="greenButton">Upload!</a>
        </div>
    </div>
    
    <span class="settings"></span>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="assets/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="assets/webcam/webcam.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>
