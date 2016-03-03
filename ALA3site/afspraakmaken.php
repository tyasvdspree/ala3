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
						
			<title>Afspraak Maken</title>
					
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
			<div class="col-xs-1">
			</div>
				<div class="col-xs-3 blok edgeleft">
					
						<form method="post" action="afspraak.php?high=2">
							  <div class="form-group">
								
								<div class="forms">
									<input type="name" class="text" name="txtVoornaam" placeholder=" John" maxlength="20" required>
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
								<input type="name" class="text" name="txtAchternaam" placeholder=" Appleseed" maxlength="20" required>
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
								<input type="number" class="text" name="txtTelefoon" placeholder=" 0612345678" min="0" max="9999999999" required>
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
									<input type="email" class="text" name="txtEmail" placeholder=" johnappleseed@gmail.com" required>
										<label>Email</label>	
								</div>
							
													<div class="txtarea">	
							<?php
								if ($Taalnu == "EN"){
							?>
								<p>Reason for the appointment</p>
							<?php	
								}
								else {
							?>
								<p>De reden voor uw afspraak</p>
							<?php
								}
							?>
					
					
						<textarea class="form-control" rows="3" name="Reden" required style="color: white; background-color: transparent; font-size: 86%;"></textarea><br>
						</div>
							<?php
								if ($Taalnu == "EN"){
							?>
								<button type="submit" class="btn btn-default" onclick="validatie">Request appointment</button>
							<?php	
								}
								else {
							?>
								<button type="submit" class="btn btn-default" onclick="validatie">Afspraak aanvragen</button>
							<?php
								}
							?>
						</div>
					</div>
				
					<div class="col-xs-3 blok edgeright">
						
							<div class="forms">
								<input type="name" class="text" name="txtPostcode" placeholder=" 1234AB" maxlength="6" required>
							<?php
								if ($Taalnu == "EN"){
							?>
								<label>Zip code</label>
							<?php
							}
								else {
							?>
								<label>Postcode</label>
							<?php
								}
							?>
							</div>
							
							<div class="forms">
								<input type="name" class="text" name="txtStraat" placeholder=" Applestraat" required>
							<?php
								if ($Taalnu == "EN"){
							?>
								<label>Street</label>
							<?php
							}
								else {
							?>
								<label>Straat</label>
							<?php
								}
							?>
							</div>
							
							<div class="forms">
								<input type="name" class="text" name="txtHuisnummer" placeholder="1" min="0" max="999" required>
							<?php
								if ($Taalnu == "EN"){
							?>
								<label>Homenumber</label>
							<?php
							}
								else {
							?>
								<label>Huisnummer</label>
							<?php
								}
							?>
							</div>
							
							<div class="forms">
								<input type="name" class="text" name="txtPlaats" placeholder=" Amsterdam" required>
							<?php
								if ($Taalnu == "EN"){
							?>
								<label>residence</label>
							<?php
								}
								else {
							?>
								<label>Woonplaats</label>
							<?php									}
							?>
										
							</div>
					</div>
				</form>
			</div>
		</body>
	</html>
