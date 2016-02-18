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
					
		</head>
		<body onload="browserCheck()">
			<script>
				
				function login(){
					sessionStorage.txtVoornaam = document.getElementById("voornaam").value;
					sessionStorage.txtAchternaam = document.getElementById("achternaam").value;
					window.location.reload();
				}
					
				
			</script>
			
			<script>
				
				$(document).ready(function(){
					if(sessionStorage.txtVoornaam != undefined && sessionStorage.txtAchternaam != undefined){
					document.getElementById("inloggevens").innerHTML = "&nbsp Welkom " + sessionStorage.txtVoornaam;
					document.getElementById("inloggevens").innerHTML = document.getElementById("inloggevens").innerHTML + " " + sessionStorage.txtAchternaam;
					
					}
					
					else{
						
						document.getElementById("inloggevens").innerHTML = "&nbsp Welkom gast";
						
					}
				});
				
			
			</script>
			
			<div class="well bovenkant">					
				<h1><a href="index.php" style="text-decoration:none">Gemeente Waar u ook woont</a></h1>
			</div>
			
			<a href="index.php">
				<img src="images/nlvlag.jpg"
				  width="50" height="33" border="0" style="position: absolute; top: 2%; left: 93.73%;"/>
			</a>
			<a href="indexUS.html">
				<img src="images/usaflag.jpg"
				  width="50" height="33" border="0" style="position: absolute; top: 6%; left: 93.73%;"/>
			</a>
			
			 <div class="dropdown">
				<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Login
				<span class="caret"></span></button>
				<ul class="dropdown-menu">
				  <li>
				  
							<div id="LoginForm">
								
								<div class="form-group">
								
									<div class="forms">
										<input type="name" id="voornaam" class="text" name="txtVoornaam" maxlength="15" placeholder=" John" required>
											<label>Voornaam</label>
									</div>
									
									<div class="forms">
										<input type="name" id="achternaam" class="text" name="txtAchternaam" maxlength="15"placeholder=" Appleseed" required>
											<label>Achternaam</label>
									</div>
								
							  </div>
							  <button class="btn btn-default" onclick="login()">Login</button>
							
							</div>
				  </li>
				</ul>
			  </div>
				
		<div class="row">
			<div class="col-xs-12 menu">
				<div id="inloggevens"></div>
			</div>
			
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
		
		<div class="row">
			<div class="col-xs-12 iets">
			</div>
		</div>
			<div class="row">
				<div class="col-xs-1">
				</div>
				<div class="col-md-4">
					<div class="well blok">
					
						<form method="post" action="prodcuten.php">
							  <div class="form-group">
								
								<div class="forms">
									<input type="name" class="text" name="txtVoornaam" placeholder=" John" required>
										<label>Voornaam</label>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtAchternaam" placeholder=" Appleseed" required>
										<label>Achternaam</label>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtAdres" placeholder=" 1234AB Applestraat 1" required>
										<label>Postcode, straat en huisnummer</label>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtPlaats" placeholder="Amsterdam" required>
										<label>Woonplaats</label>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtTelefoon" placeholder="0612345678" required>
										<label>Telefoon</label>	
								</div>
								
								<div class="forms">
									<input type="email" class="text" name="txtEmail" placeholder="johnappleseed@gmail.com" required>
										<label>Email</label>	
								</div><br>
								
									<div class="checkbox">
										<label>
											<input type="checkbox" name="register" value="Bevolkins register"> Bevolkins register</input><br>
											<input type="checkbox" name="paspoort" value="Paspoort aanvragen"> Paspoort aanvragen</input><br>
											<input type="checkbox" name="paspoort" value="Paspoort verlengen"> Paspoort verlengen</input>
										</label><br>
									</div>
									
							<button type="submit" class="btn btn-default">Bestellen</button>
							
						</form>						
					</div>
				</div>
			</div>
			
				<div class="navbar navbar-inverse navbar-fixed-bottom">
					<div class="container">
						<p class="navbar-text pull-left copyright">&copy;Labtreeo.inc <script>new Date().getFullYear()&&document.write(new Date().getFullYear());</script>
					</div>
				</div>
			
		</body>
	</html>