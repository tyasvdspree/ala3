<!DOCTYPE HTML>
	<html>
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					
			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
					
			<title>Producten</title>
					
		</head>
		<body>
		
			<div class="well bovenkant">					
				<h1><a href="index.php" style="text-decoration:none">Gemeente Waar u ook woont</a></h1>
			</div>
			<a href="afspraakmaken.html">
				<img src="images/nlvlag.jpg"
				  width="50" height="33" border="0" style="position: absolute;top: 2%; left: 93.73%;"/>
			</a>
			<a href="afsrpaakmakenUS.html">
				<img src="images/usaflag.jpg"
				  width="50" height="33" border="0" style="position: absolute;top: 6%; left: 93.73%;"/>
			</a>
			
			
		
		<div class="row">
			<div class="col-xs-12 menu">
				<header class="header is-transparent">
			<div class="l-padding">
				<div class="header-actions">
					<div class="header-nav">
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="afspraakmaken.php">Afspraak maken</a>
							</li>
							<li  class="is-active">
								<a href="#">Producten</a>
							</li>
							<li>
								<a href="vragenmaken.php">Vragen</a>
							</li>
							<li>
								<a href="toerisme.php">Toerisme</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 iets">
			</div>
		</div>
			<div class="row">
				<div class="col-xs-1">
				</div>
				<div class="col-md-3">
					<div class="well blok">
					
<?php
	
	foreach($_POST as $key => $variable) {
		$$key = $variable;
	}
	
	if(isset($txtVoornaam)) {
		$voornaam = $txtVoornaam;
		$achternaam = $txtAchternaam;
		$adres = $txtAdres;
		$woonplaats = $txtPlaats;
		$telefoon = $txtTelefoon;
		$email = $txtEmail;
		

		echo "Hieronder staan uw gegevens.
			<br>Naam: $voornaam $achternaam
			<br>Adres: $adres
			<br>woonplaats: $woonplaats
			<br>Telefoon nummer: $telefoon
			<br>Email: $email";
		
	}
	else {
		exit("Error ga terug naar de homepagina");
	}
	
?>



					</div>
				</div>
				<div class="col-xs-4">
				</div>
				
			<div class="row">
				<div class="col-xs-5 ugh">
				</div>
				<div class="col-xs-4 igh">

				</div>
				<div class="col-xs-4">
					<div class="well redenblok">
					
					
<?php
	
	foreach($_POST as $key => $variable) {
		$$key = $variable;
	}
	
	if(isset($register)) {
		date_default_timezone_set("Europe/Amsterdam");
		$vandaag = date("d-m-Y H:i:s");
		$reg = $register;
		$pas = $paspoort;

		echo"$vandaag
			<br>Bestellingen:<br>
			$reg<br>
			$pas<br><br>
			Bedankt voor uw bestelling het wordt binnen 3 tot 5 werkdagen bezorgd.";

		
	}
	else {
		exit("Error ga terug naar de homepagina");
	}
	
?>
					
					
					</div>
				
				</div>
				
	
			</div>
				
			</div>
			
				<div class="navbar navbar-inverse navbar-fixed-bottom">
					<div class="container">
						<p class="navbar-text pull-left copyright">&copy;/...\.inc <script>new Date().getFullYear()&&document.write(new Date().getFullYear());</script>
					</div>
				</div>
			
		</body>
	</html>