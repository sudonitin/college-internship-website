<!DOCTYPE html>
<html>
<head>
	<title>Gemini Automobiles</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="land.css">
	<script type="text/javascript" src="land.js"></script>
	<style type="text/css">
		@media only screen and (max-width: 700px) {
	.company_name{
		position: absolute; 	
		left: 50%;
		top: 50%; 
		transform: translate(-50%, -50%);
		font-family: 'Barlow', sans-serif;
		font-weight: bold;
		z-index: 1000;
		font-size: 410%;
		display: block;
		text-align: center;
	}
		.scrollbar {
		font-family: Calibri;
		font-weight: bold;
		color:  #2e2e1f;
		font-size: 220%;
		position: absolute;
		animation: topup 1s;
		animation-fill-mode: forwards;
	}

	.scrollbar-anim{
		border-top-style: solid;
		border-width: 2px;
		border-color:  #2e2e1f;
		animation: abc 1s infinite;
	}


.scrollbar-text:after{
	content: "s w i p e";
}


}	
	@media only screen and (min-width: 1000px) {
	.company_name{
		position: absolute; 	
		left: 50%;
		top: 50%; 
		transform: translate(-50%, -50%);
		font-family: 'Barlow', sans-serif;
		font-weight: bold;
		z-index: 1000;
		font-size: 500%;
		display: block;
		text-align: center;
	}

	.scrollbar {
		font-family: Calibri;
		font-weight: bold;
		color:  #2e2e1f;
		font-size: 130%;
		position: absolute;
		animation: topup 1s;
		animation-fill-mode: forwards;
	}

	.scrollbar-anim{
		border-top-style: solid;
		border-width: 2px;
		border-color:  #2e2e1f;
		animation: abc 1s infinite;
	}

	.scrollbar-text:after{
	content: "s c r o l l";
	}
}
	

	</style>
</head>
<body onscroll="MyFunc()">
		<h1 class="company_name">
			<span style="color:  #666666;" >GEMINI</span><span style="color: #e65c00;"> AUTOMOBILES</span>
		</h1>
		<ul class="slideshow" style="list-style-type: none;">
			<li><span></span></li>
			<li><span></span></li>
			<li><span></span></li>
			<li><span></span></li>
			<li><span></span></li>
			<li><span></span></li>
		</ul>

	

		<div class="scrollbar">
			<div class="scrollbar-text"></div>
			<div class="scrollbar-anim"></div>
		</div>
</body>
</html>

