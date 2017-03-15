<?php require "init.php" ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="contenu" content="contenu">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
  	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aerodrome Evreux Normandie</title>
</head>
<body>
	<?php require "navbar.php"; ?>
	<div class="row">
		<div class="area-under-nav">
			<div class="container">
				<div class="col-xs-12">
					<div class="aerodrome">
						<img class="logo" src="images/AEN.png">Aerodrome Evreux Normandie
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 part">
			<center><div class="caroussel">
				<div><img class="img-caroussel" src="images/plane1.jpg"></div>
			    <div><img class="img-caroussel" src="images/planes.jpg"></div>
			    <div><img class="img-caroussel" src="images/plane2.jpg"></div>
			  </div>
			</div></center>
		</div>
		<div class="row">
			<div class="col-xs-12 part-one">
				<div class="col-lg-6 part-one-txt">
					<b>Où nous trouver?</b><br><br>
					Adresse: Rue de Damville, 27220 Les Authieux<br>
					tél: 06.07.08.09.10<br>
					mail: mail@gmail.com
				</div>
				<div class="col-lg-6 part-one-txt">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2622.8455488259074!2d1.2387190154992636!3d48.89928060578095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e14fbbf62fb997%3A0x125a3c9c0027d738!2sRue+de+Damville%2C+27220+Les+Authieux!5e0!3m2!1sfr!2sfr!4v1489332703763" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	<?php require "footer.php" ?>	
	<?php require "js.php" ?>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  	<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  	<script type="text/javascript" src="slick/slick.min.js"></script>
  	<script type="text/javascript">
  		$('.caroussel').slick({
  			dots: true,
  			slidesToShow: 1,
  			SlidesToScroll: 1,
  			autoplay: true,
  			autoplaySpeed: 2000,
  			speed: 1000,
  			arrow: true,
  			mobileFirst: true,
  			adaptiveHeight: true,
  			accessibility: true
  		});
  	</script>
</body>
</html>