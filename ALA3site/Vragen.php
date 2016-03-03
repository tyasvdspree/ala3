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
					
			<title>Vragen</title>
					
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
	
	if(isset($txtEmail)) {
		date_default_timezone_set("Europe/Amsterdam");
		$vandaag = date("d-m-Y H:i:s");
		$voornaam = $txtVoornaam;
		$achternaam = $txtAchternaam;
		$email = $txtEmail;
		$reden = $txtReden;
	
					if ($Taalnu == "EN"){
				
					 echo "$vandaag
					<br>$reden
					<br><br>Send by $email from $voornaam $achternaam
					<br><br>Thanks for asking your question we will react in 2 work days.";

				
					}
					else {
				
					echo "$vandaag
					<br>$reden
					<br><br>Gestuurd vanaf $email door $voornaam $achternaam
					<br><br>Bedankt voor het stellen van uw vragen u krijgt een reactie binnen twee werkdagen.";
				
					}
					

	}
	else {
		exit("Error ga terug naar de homepagina");
	}
	
?>
							
					</div>
				</div>
					<div class="col-xs-4">
					</div>
			</div>
		</body>
	</html>