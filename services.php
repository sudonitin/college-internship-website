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
	<title>services</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="services.css">
	<style>
		.row{
			font-family: 'Roboto';
			font-size: 120%;
		}
	</style>
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
		<header><h2><i class="fas fa-tag"></i>
		Our <span class="head_name">Services</span></h2></header>
		<p>Gemini Automobile is approved by Castrol India Ltd. as Castrol Pitstop/Nippon Paints as Nippon Paint Express/Bosch India Ltd. as Express Car Services. Gemini Automobiles is specialized in all types of major/minor repairs in mechanical/accidental claims/Specialized painting supported by Nippon Paints/Electrical/AC/Alighment Jobs/Bosch genuine spaires in all Indian cars running on-road as on today.
		</p><hr>
		<h3 style="color: #00802b; padding-top: 0.5%" class="abc">MECHANICAL / TIN WORK / PAINTING / ELECTRICAL REPAIRS WITH ALL FACILITTIES</h3>
			<div class="container" id="list-of-services" style="padding-right: 4%; padding-left: 4%; padding-top: 1%; font-family: Josefin Sans">
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i> Dust Free paint Booth with Colour Matching</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i> 
Upholstery / Carpet Vacuum Cleaning With Machine</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Accident Repair Section (Major & minor)</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Pneumatic Tool LIne</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Washing Ramp / Service Ramp</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Under Chassis Coating / Water Proofing</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Engine De –Carbonizing</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Air Conditioner Maintenance and Repairs</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Machine Polishing</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Wheel Alligment / Balancing</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Engine Scanning With Machine</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Battery Charging</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Injector cleaning with Machine</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Electrical Welding</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Inspection pit</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Car Upholstery Work</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 2 post Lift</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 PUC Check- Up / Reminder / Renewal</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Sparkplug cleaner / Tester</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 RTO Consultancy - Insurance Consultancy</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Coolant Tester</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Accident Claim Settlement</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Waste oil Dispenser</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Towing - Break Down</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Tool Trolley</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Pre Check Up for second hand vehicles</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Special Tools</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Vehicle Pick- Up & Drop Facility</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Head Light Polishing / Exhaust Coading</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Paint mixing machine by nippon paint</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Car Pest Control For Cockroaches & Ants (Eco Friendly)</div>
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Timing Light / Techometer</div>
				</div>
				<div class="row">
					<div class="col-6"><i class="fa fa-plus-circle" aria-hidden="true"></i>
 Detailing Service</div>
					<div class="col-6"></div>
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