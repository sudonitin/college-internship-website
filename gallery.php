<!DOCTYPE html>
<html>
<head>
	<title>gallery</title>
	<style>
		.row img:hover{
			opacity: 0.6;
		}

		.row img{
			border-radius: 2%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}
	</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel="stylesheet" type="text/css" href="gallery.css">
</head>	

		<div class="topnav container-fluid" id="myTopnav" style="position: sticky; top: 0">
		  <a href="http://localhost/my_gemini_2/home.php">Home</a>
		  <a href="#news">Services</a>
		  <a href="#contact">Cashless Insurance</a>
		  <a href="#about">Gallery</a>
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

<body>
	<div class="container">
		
		<div class="row"> 
  <div class="column" id="#column1">
    <img src="1.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
    <img src="3.jpg" style="width:100%">
    <img src="4.jpg" style="width:100%">
    <img src="5.jpg" style="width:100%">
  </div>
  <div class="column" id="column2">
    <img src="6.jpg" style="width:100%">
    <img src="7.jpg" style="width:100%">
    <img src="8.jpg" style="width:100%">
    <img src="9.jpg" style="width:100%">
    <img src="10.jpg" style="width:100%">
  </div>  
  <div class="column" id="column3">
    <img src="5.jpg" style="width:100%">
    <img src="4.jpg" style="width:100%">
    <img src="1.jpg" style="width:100%">
    <img src="3.jpg" style="width:100%">
    <img src="2.jpg" style="width:100%">
  </div>
  <div class="column" id="column4">
    <img src="9.jpg" style="width:100%">
    <img src="10.jpg" style="width:100%">
    <img src="8.jpg" style="width:100%">
    <img src="7.jpg" style="width:100%">
    <img src="6.jpg" style="width:100%">
  </div>
</div>

	</div><br>

		<footer>
			<div class="container-fluid" id="footer">
	<div class="container" id="footer-container">
		<img src="final-logo.png" class="footer-logo"><br>
		<h3 class="footer-head">Contact Us</h3>
		<form>
			<input type="text" name="name" class="inputs" placeholder="Enter your name"> *<br><br>
			<input type="text" name="name" class="inputs" placeholder="Enter your email"> *<br><br>
			<label>Comment<br><textarea placeholder="Describe your query here" class="inputs"></textarea></label>
		</form>
		copyright(c) 2013. Gemini Automobiles. All rights Reserved. <font class="font">Developed by </font>
	</div>
</div>

		</footer>

</body>

</html>

