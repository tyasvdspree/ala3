<!DOCTYPE HTML>
	<html>
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					
			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
					
			<title>Afspraak</title>
			
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
	
	if(isset($Reden)) {
		$reden = $Reden;
		

		echo"Reden:<br>
			$reden<br><br>
			Uw afspraak is gemaakt en uw krijgt binnen twee werkdagen bericht.";

		
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