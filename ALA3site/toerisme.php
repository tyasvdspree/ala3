<!DOCTYPE HTML>
	<html>
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
			<script src="index.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
					
			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
						
			<title>Toerisme</title>
					
		</head>
		<body>
			
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
						<li>
							<a href="afspraakmaken.php">Afspraak maken</a>
						</li>
						<li>
							<a href="productenbestellen.php">Producten</a>
						</li>
						<li>
							<a href="vragenmaken.php">Vragen</a>
						</li>
						<li class="is-active">
							<a href="#">Toerisme</a>
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
					<p> Dit is de toerisme pagina van de gemeente website hier kunt u informatie vinden.
					<br>Als u een vraag wilt stelen dan kunt u op de knop hieronder klikken.</p>
					<a href="vragenmaken.php"><button class="btn btn-default">Stel uw vraag</button></a>
				</div>
			</div>
			
			<div class="col-xs-2">
			</div>
			
			<div class="col-xs-4">
				<div class="well toerismeblok">
					<p>Welkom op de pagina toerisme <br> 
					De stad is rijk aan bezienswaardigheden zoals ; winkels, eetgelegenheden, musea, zwembaden en heel veel meer.<br> 
					Bij het stadhuis zijn daarom ook gratis kaarten te vinden over de bezienswaardigheden van de stad.</p>
				</div>
			</div>
		</div>
		
			<div class="row">
				<div class="col-xs-5 ugh">
				</div>
				<div class="col-xs-4 igh">
				</div>
				<div class="col-xs-4">
					<div class="well redenblok">
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
								<li data-target="#myCarousel" data-slide-to="4"></li>
								<li data-target="#myCarousel" data-slide-to="5"></li>
							</ol>   
							<div class="carousel-inner">
								<div class="item active">
									<img src="images/ala3stad1.jpg">
								</div>
								<div class="item">
									<img src="images/ala3stad2.jpg">
								</div>
								<div class="item">
									<img src="images/ala3stad3.jpg">
								</div>
								<div class="item">
									<img src="images/ala3stad4.jpg">
								</div>
								<div class="item">
									<img src="images/ala3stad5.jpg">
								</div>
								<div class="item">
									<img src="images/ala3stad6.jpg">
								</div>
							</div>
						</div>		
					</div>
				</div>
				
				<div class="navbar navbar-inverse navbar-fixed-bottom">
					<div class="container">
						<p class="navbar-text pull-left copyright">&copy;/...\.inc <script>new Date().getFullYear()&&document.write(new Date().getFullYear());</script>
					</div>
				</div>
		
		</body>
	</html>
