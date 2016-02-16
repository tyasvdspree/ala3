<!DOCTYPE HTML>
	<html>
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					
			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
					
			<title>Vragen</title>
					
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
		
			<a href="vragenmaken.php">
				<img src="images/nlvlag.jpg"
				  width="50" height="33" border="0" style="position: absolute;top: 2%; left: 93.73%;"/>
			</a>
			<a href="VragenUS.html">
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
					<li>
						<a href="afspraakmaken.php">Afspraak maken</a>
					</li>
					<li>
						<a href="productenbestellen.php">Producten</a>
					</li>
					<li class="is-active">
						<a href="#">Vragen</a>
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
				<div class="col-md-3">
					<div class="well blok">
						<form method="post" action="Vragen.php" id="afspraak">
							
							<div class="form-group">
							
								<div class="forms">
									<input type="name" class="text" name="txtVoornaam" placeholder="John" required>
										<label>Voornaam</label>
								</div>
								
								<div class="forms">
									<input type="name" class="text" name="txtAchternaam" placeholder="Appleseed" required>
										<label>Achternaam</label>
								</div>
								
								<div class="forms">
									<input type="email" class="text" name="txtEmail" placeholder="johnappleseed@gmail.com" required>
										<label>Email</label>	
								</div>
							
						  </div>
						<div class="txtarea">  
						  <p>Typ hier uw vraag in</p>
						  <textarea class="form-control" name="txtReden" rows="3" required style="color: white; background-color: transparent;"></textarea>
						</div>
						  <div class="form-group">
							<label>Bestand</label>
							<input type="file" id="exampleInputFile"><br>
							<p>Als u een meerdere pagina's lang is of u heeft foto's upload ze dan hier</p>
						  </div>
						  <button type="submit" class="btn btn-default">Vraag opsturen</button>
						</form>
					</div>
				</div>
				<div class="col-xs-4">
				</div>
			</div>
			
				<div class="navbar navbar-inverse navbar-fixed-bottom">
					<div class="container">
						<p class="navbar-text pull-left copyright">&copy;/...\.inc <script>new Date().getFullYear()&&document.write(new Date().getFullYear());</script>
					</div>
				</div>
			
		</body>
	</html>