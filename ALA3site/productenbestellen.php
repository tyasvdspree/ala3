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
			<div class="col-xs-1">
			</div>
				<div class="col-xs-3 blok edgeleft">
					
						<form method="post" action="prodcuten.php?high=3">
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
								<input type="name" class="text" name="txtAchternaam" placeholder=" Appleseed" maxlength="20"required>
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
								<input type="number" class="text" name="txtTelefoon" placeholder=" 0612345678"  min="0" max="9999999999" required>
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

							<?php
								if ($Taalnu == "EN"){
							?>
								<button type="submit" class="btn btn-default">Order</button>
							<?php	
								}
								else {
							?>
								<button type="submit" class="btn btn-default">Bestellen</button>
							<?php
								}
							?>
						</div>
					</div>
				
					<div class="col-xs-5 blok edgeright-kopie">
						
							<div class="forms">
								<input type="name" class="text" name="txtPostcode" placeholder=" 1234AB" maxlength="6"required>
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
								<input type="number" class="text" name="txtHuisnummer" placeholder="1" maxlength="3"  min="0" max="999" required>
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
									<div class="checkbox">
										<label>
											<?php
												if ($Taalnu == "EN"){
											?>
												<input type="radio" name="register" value="Bevolkins register" required> Population register</input><br>
												<input type="radio" name="register" value="Geen Bevolkins register" required> No population register</input><br>
												<hr>
												<input type="radio" name="paspoort" value="Paspoort aanvragen" required> Request passport</input><br>
												<input type="radio" name="paspoort" value="Paspoort verlengen" required> Extend passport</input><br>
												<input type="radio" name="paspoort" value="Geen Paspoort aanvragen/verlengen" required> Don't Request passport/extension</input><br>
											<?php
												}
												else {
											?>
												<input type="radio" name="register" value="Bevolkins register" required> Bevolkins register</input><br>
												<input type="radio" name="register" value="Geen Bevolkins register" required> Geen bevolkins register</input><br>
												<hr>
												<input type="radio" name="paspoort" value="Paspoort aanvragen" required> Paspoort aanvragen</input><br>
												<input type="radio" name="paspoort" value="Paspoort verlengen" required> Paspoort verlengen</input><br>
												<input type="radio" name="paspoort" value="Geen Paspoort aanvragen/verlengen" required> Geen Paspoort aanvragen/verlengen</input><br>
											<?php
												}
											?>
										</label><br>
									</div>

						</form>						
					
				</div>
			</div>
		</body>
	</html>