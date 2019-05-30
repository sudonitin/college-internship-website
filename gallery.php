<?php 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require './PHPMailer/src/Exception.php';
	require './PHPMailer/src/PHPMailer.php';
	require './PHPMailer/src/SMTP.php';

	if (isset($_POST['submit'])) {
		# code...
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$mail = new PHPMailer(true);

		try {
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 587;
			$mail->SMTPAuth = true;
			$mail->Username = 'geminiautomobilesnerul@gmail.com
';
			$mail->Password = 'i like it';
			$mail->SMTPSecure = 'tls';

			$mail->setFrom('geminiautomobilesnerul@gmail.com
','Gemini Automobiles');
			$mail->addAddress("phpmailer7.0@gmail.com");
			$mail->addReplyTo('geminiautomobilesnerul@gmail.com
');

			$mail->isHTML(true);
			$mail->Subject = "complaint of " . $name;
			$mail->Body = $message;

			$mail->send();
		} catch (Exception $e) {
			echo "message was not sent", $mail->ErrorInfo;
		}


		$mailme = new PHPMailer(true);

		try {
			$mailme->isSMTP();
			$mailme->Host = 'smtp.gmail.com';
			$mailme->Port = 587;
			$mailme->SMTPAuth = true;
			$mailme->Username = 'geminiautomobilesnerul@gmail.com
';
			$mailme->Password = 'i like it';
			$mailme->SMTPSecure = 'tls';

			$mailme->setFrom('geminiautomobilesnerul@gmail.com
','Gemini Automobiles');
			$mailme->addAddress($email); 
			$mailme->addReplyTo('geminiautomobilesnerul@gmail.com
');

			$mailme->isHTML(true);
			$mailme->Subject = "hello " . $name;
			$mailme->Body = 'Thank you ' .$name. ' for reaching us. we will look into your complaint as soon as possible';

			$mailme->send();
		} catch (Exception $e) {
			echo "message was not sent", $mail->ErrorInfo;
		}
	}
	
?>


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
		  <a href="./home.php">Home</a>
		  <a href="./services.php">Services</a>
		  <a href="./cashless_insurance.php">Cashless Insurance</a>
		  <a href="./gallery.php">Gallery</a>
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
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<input type="text" name="name" class="inputs" placeholder="Enter your name" style=""> *<br><br>
			<input type="text" name="email" class="inputs" placeholder="Enter your email"> *<br><br>
			<label>Comment<br><textarea name="message" placeholder="Describe your query here" class="inputs"></textarea></label><br><br>
			<input type="submit" name="submit" value="submit" class="button">
		</form>
		copyright(c) 2013. Gemini Automobiles. All rights Reserved. <font class="font">Developed by <a href = "https://github.com/globefire">Globefire</a></font>
	</div>
</div>

		</footer>

</body>

</html>

