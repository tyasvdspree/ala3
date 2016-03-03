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
			
			<?php
				include"autopage.html";
			?>	
			
		</head>
		<body>
			<?php
			include"balk.php";
			?>
		
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
		date_default_timezone_set("Europe/Amsterdam");
		$vandaag = date("d-m-Y H:i");
		$voornaam = $txtVoornaam;
		$achternaam = $txtAchternaam;
		$postcode = $txtPostcode;
		$straat = $txtStraat;
		$huisnummer = $txtHuisnummer;
		$woonplaats = $txtPlaats;
		$telefoon = $txtTelefoon;
		$email = $txtEmail;
		

		echo "Hieronder staan uw gegevens.
			<br>Datum: $vandaag
			<br>Naam: $voornaam $achternaam
			<br>Adres: $postcode $straat $huisnummer
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
		$reg = $register;
		$pas = $paspoort;

		echo"Bestellingen:<br>
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
		</body>
	</html>