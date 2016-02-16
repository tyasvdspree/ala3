<!DOCTYPE HTML>
	<html>
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					
			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
						
			<title>Afspraak Maken</title>
					
		</head>
		<body onload="browserCheck()">
			<script>

			   function browserjquery(){
			   $(':input').removeAttr('placeholder');
			   }
			   function browserCheck() { 
				if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) {
				
			   }
			   else if(navigator.userAgent.indexOf("Chrome") != -1 ){
				 
			   }
			   else if(navigator.userAgent.indexOf("Safari") != -1)
			   {
				browserjquery();
			   }
			   else
			</script>
		
			<script>
				
				$(document).ready(function(){
					console.log(sessionStorage.voornaam + " " + sessionStorage.achternaam)
					if(sessionStorage.txtVoornaam != undefined && sessionStorage.txtAchternaam != undefined){
					document.getElementById("voornaam").innerHTML = "&nbsp Welkom " + sessionStorage.txtVoornaam;
					document.getElementById("voornaam").innerHTML = document.getElementById("voornaam").innerHTML + " " + sessionStorage.txtAchternaam;
					}
					
					else{
						
						document.getElementById("voornaam").innerHTML = "&nbsp Welkom gast";
						
					}
				});
				
			
			</script>
		
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
			
			<a href="Login.php"><button class="btn btn-default login" >Login</button></a>
				
				
			<div class="row">
				<div class="col-xs-12 menu">
					<div class="inloggevens">


						<div id="voornaam">
						</div>
						
						<div id="achternaam">
						</div>
						
					</div>
				</div>
				<div class="header-actions">
					<div class="header-nav">
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li class="is-active">
								<a href="#">Afspraak maken</a>
							</li>
							<li>
								<a href="productenbestellen.php">Producten</a>
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
					
						<form method="post" action="afspraak.php">
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
									<input type="name" class="text" name="txtPlaats" placeholder=" Amsterdam" required>
										<label>Woonplaats</label>
								</div>
								
								<div class="forms">
									<input type="number" class="text" name="txtTelefoon" placeholder=" 0612345678" min="0" required>
										<label>Telefoon</label>	
								</div>
								
								<div class="forms">
									<input type="email" class="text" name="txtEmail" placeholder=" johnappleseed@gmail.com" required>
										<label>Email</label>	
								</div>
								
							<div class="txtarea">	
							<p>De reden voor uw afspraak</p>
								<textarea class="form-control" rows="3" name="Reden" required style="color: white; background-color: transparent;"></textarea><br>
							</div>
							<button type="submit" class="btn btn-default" onclick="validatie">Afspraak aanvragen</button>
							
						</form>
							
						
							
					</div>
				</div>>
			</div>
			
				<div class="navbar navbar-inverse navbar-fixed-bottom">
					<div class="container">
						<p class="navbar-text pull-left copyright">&copy;/...\.inc <script>new Date().getFullYear()&&document.write(new Date().getFullYear());</script>
					</div>
				</div>
			
		</body>
	</html>
