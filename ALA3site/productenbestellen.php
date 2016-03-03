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
						
			<title>Producten Bestellen</title>
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
				<div class="col-md-5">
					<div class="well blok">
					<?php
						if ($Taalnu == "EN"){
					?>
						
						<form method="post" action="prodcuten.php?taal=EN&high=3">
						
					<?php
						}
						
						else {
					?>
						<form method="post" action="prodcuten.php?taal=NL&high=3">
					<?php	
						}	
					?>
						<div class="form-group">
								
								<div class="forms">
									<input type="name" class="text" name="txtVoornaam" placeholder=" John" required>
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
									<input type="name" class="text" name="txtAchternaam" placeholder=" Appleseed" required>
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
									<input type="name" class="text" name="txtAdres" placeholder=" 1234AB Applestraat 1" required>
							<?php
								if ($Taalnu == "EN"){
							?>
								<label>Zip code, street and Address</label>
							<?php
							}
								else {
							?>
								<label>Postcode, straat en huisnummer</label>
							<?php
								}
							?>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtPlaats" placeholder="Amsterdam" required>
								<?php
								if ($Taalnu == "EN"){
							?>
								<label>residence</label>
							<?php
								}
								else {
							?>
								<label>Woonplaats</label>
							<?php						
							}
							?>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtTelefoon" placeholder="0612345678" required>
							<?php
								if ($Taalnu == "EN"){
							?>
								<label>Phone number</label>
							<?php
								}
								else {
							?>
								<label>Telefoon</label>
							<?php
								}
							?>
								</div>
								
								<div class="forms">
									<input type="email" class="text" name="txtEmail" placeholder="johnappleseed@gmail.com" required>
										<label>Email</label>	
								</div><br>
								
									<div class="checkbox">
										<label>
											<?php
												if ($Taalnu == "EN"){
											?>
												<input type="radio" name="register" value="Bevolkins register" required> Population register</input><br>
												<input type="radio" name="register" value="Geen Bevolkins register" required>No population register</input><br>
												<hr>
												<input type="radio" name="paspoort" value="Paspoort aanvragen" required> Request passport</input><br>
												<input type="radio" name="paspoort" value="Paspoort verlengen" required> Extend passport</input>
												<input type="radio" name="paspoort" value="Geen Paspoort aanvragen/verlengen" required>Don't Request passport/extend</input><br>
											<?php
												}
												else {
											?>
												<input type="radio" name="register" value="Bevolkins register" required> Bevolkins register</input><br>
												<input type="radio" name="register" value="Geen Bevolkins register" required>Geen bevolkins register</input><br>
												<hr>
												<input type="radio" name="paspoort" value="Paspoort aanvragen" required>Paspoort aanvragen</input><br>
												<input type="radio" name="paspoort" value="Paspoort verlengen" required> Paspoort verlengen</input><br>
												<input type="radio" name="paspoort" value="Geen Paspoort aanvragen/verlengen" required>Geen Paspoort aanvragen/verlengen</input><br>
											<?php
												}
											?>
										</label><br>
									</div>
									
							<button type="submit" class="btn btn-default">Bestellen</button>
							
						</form>						
					</div>
				</div>
			</div>
		</body>
	</html>