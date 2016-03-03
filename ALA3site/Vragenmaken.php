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
				include"javascriptdetectbrowser.html";
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
										if ($Taalnu == "EN"){						
									?>
										  <form method="post" action="Vragen.php?taal=EN&high=4" id="afspraak">
									<?php
										}
										else {
									?>
										<form method="post" action="Vragen.php?taal=NL&high=4" id="afspraak">
									<?php
										}
									?>
							<div class="form-group">
							
								<div class="forms">
									<input type="name" class="text" name="txtVoornaam" placeholder="John" required>
									<?php
										if ($Taalnu == "EN"){						
									?>
										  <label>First name</label>
									<?php
										}
										else {
									?>
										<label>Voornaam</label>
									<?php
										}
									?>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtAchternaam" placeholder="Appleseed" required>
									<?php
										if ($Taalnu == "EN"){
									?>
										<label>Last name</label>
									<?php
										}
										else {
									?>
										<label>Achternaam</label>
									<?php
										}
									?>
								</div>
								
								<div class="forms">
									<input type="email" class="text" name="txtEmail" placeholder="johnappleseed@gmail.com" required>
										<label>Email</label>	
								</div>
							
						  </div>
						<div class="txtarea">  
									<?php
										if ($Taalnu == "EN"){
									?>
										<p>Type your question</p>
									<?php
										}
										else {
									?>
										<p>Typ hier uw vraag in</p>
									<?php
										}
									?>
						  
						  <textarea class="form-control" name="txtReden" rows="3" required style="color: white; background-color: transparent; font-size: 86%;"></textarea>
						</div>
						  <div class="form-group">
									<?php
										if ($Taalnu == "EN"){
									?>
										<label>File</label>
									<?php
										}
										else {
									?>
										<label>Bestand</label>
									<?php
										}
									?>
							
							<input type="file" id="exampleInputFile"><br>
									<?php
										if ($Taalnu == "EN"){
									?>
										<p>If you have several pages you can upload it here</p>
									<?php
										}
										else {
									?>
										<p>Als u een meerdere pagina's lang is of u heeft foto's upload ze dan hier</p>
									<?php
										}
									?>
							
						  </div>
									<?php
										if ($Taalnu == "EN"){
									?>
										<button type="submit" class="btn btn-default">submit question</button>
									<?php
										}
										else {
									?>
										<button type="submit" class="btn btn-default">Vraag opsturen</button>
									<?php
									}
									?>
						</form>
					</div>
				</div>
				<div class="col-xs-4">
				</div>
			</div>
		</body>
	</html>