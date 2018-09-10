<?php 

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require '../PHPMailer/src/Exception.php';
	require '../PHPMailer/src/PHPMailer.php';
	require '../PHPMailer/src/SMTP.php';

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
	<title>current_Home</title>
	<?php include "navbar.php";?>
	
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

</head>
<body style="">
	<div class="container" id = "fluid_3">
		<header><h2><i class="fas fa-tag"></i>
		Welcome To Our <span class="head_name">Gemini Automobiles</span></h2></header>
				<p><img class="broken" style="width: 25%;" src="imageedit_1_4487566042.png">We at M/s Gemini Automobiles introduces ourselves as a complete workshop for all motor vehicles. Our esteemed clients are evidence of our expertise and also that we are one of the oldest and reputed workshop having all facilities for last 25 years, geared up with the latest tools and equipments for all types of vehicles running on the road today. We M/S Gemini Automobiles do all types of major and minor repairs for all types of multibrand vehicles in record time giving full satisfaction to our clients.</p><br><hr class="style-eight">
				<header><h2><i class="fas fa-tag"></i>
		Our <span class="head_name">Partners</span></h2></header><br>
	
		<div class="row" style="margin-top: -3%">

			<div class="col-4 box">
			    <img src="add_01.jpg" class="image">
			    <div class="middle">
    				<div class="text">is an 'Express Car Maintenance' centre for consumers looking for a quick, value for money and trustworthy workshop for preventive maintenance.</div>
  				</div>

			</div>

			<div class="col-4 box">
			    <img src="add_02.jpg" class="image">
			    <div class="middle">
			    	<div class="text">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</div>
			    </div>
			</div>

			<div class="col-4 box">
			    <img src="add_03.jpg" class="image">
			    <div class="middle">
			    	<div class="text">Nippon Paints, one of the largest paint manufacturers in Asia, has set up the first Paint Express at Navi Mumbai in Maharashtra.</div>
			    </div>
			</div>

		</div>
	</div><br>

		<footer>
			<div class="container-fluid" id="footer">
	<div class="container" id="footer-container">
		<img src="final-logo.png" class="footer-logo"><br>
		<h3 class="footer-head">Contact Us</h3>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
			<input type="text" name="name" class="inputs" placeholder="Enter your name" style="" required> *<br><br>
			<input type="text" name="email" class="inputs" placeholder="Enter your email" required> *<br><br>
			<label>Comment<br><textarea name="message" placeholder="Describe your query here" class="inputs" required></textarea></label><br><br>
			<input type="submit" name="submit" value="submit" class="button">
		</form>
		copyright(c) 2013. Gemini Automobiles. All rights Reserved. <font class="font">Developed by <a href = "">Globefire</a></font>
	</div>
</div>

		</footer>
</body>
</html>

<!--add image at navbar with media querries
	2)wrap image background transparent chahiye
	3)partners ko hover karne pe details chahiye