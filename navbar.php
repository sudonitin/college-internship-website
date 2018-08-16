<!DOCTYPE html>
<html>
<head>
	<title>navbar</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include "header.php"; ?>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>	

		<div class="topnav" id="myTopnav" style="position: sticky; top: 0">
		  <a href="http://localhost/my_gemini_2/home.php">Home</a>
		  <a href="#news">Services</a>
		  <a href="#contact">Cashless Insurance</a>
		  <a href="http://localhost/my_gemini_2/gallery.php">Gallery</a>
		  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="responsive_bar()">&#9776;</a>
		</div>

<script>
function responsive_bar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


</script>
</html>

