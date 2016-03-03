<!DOCTYPE HTML>
	<html>
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
					
			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
						
			<title>Toerisme</title>
			
			<?php
				include"autopage.html";
			?>
			
		</head>
		<body>			
			<div class="row">
				<div class="col-xs-12 menu">
					<div id="inloggevens"></div>
				</div>
				
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
					<p> This is the page about tourism in our town. 
					<br>If you have a question you can submit it by clicking on this button down below.</p>
					<a href="vragenmaken.php?taal=EN"><button class="btn btn-default">Ask your question</button></a>

				<?php
					}
					else {
				?>
					<p> Dit is de toerisme pagina van de gemeente website hier kunt u informatie vinden.
					<br>Als u een vraag wilt stelen dan kunt u op de knop hieronder klikken.</p>
					<a href="vragenmaken.php?taal=NL"><button class="btn btn-default">Stel uw vraag</button></a>
				<?php
					}
				?>
					
				</div>
			</div>
			
			<div class="col-xs-2">
			</div>
			
			<div class="col-xs-4">
				<div class="well toerismeblok">
				<?php
					if ($Taalnu == "EN"){
				?>
					  <p>Welcome on the tourism page<br> 
					The town has many attractions such as ; shops, dining options, museums, swimming pools and a lot more.<br> 
					In the town hall you can find free maps of the city and attractions.</p>
				<?php
					}
					else {
				?>
					<p>Welkom op de pagina toerisme <br> 
					De stad is rijk aan bezienswaardigheden zoals ; winkels, eetgelegenheden, musea, zwembaden en heel veel meer.<br> 
					Bij het stadhuis zijn daarom ook gratis kaarten te vinden over de bezienswaardigheden van de stad.</p>
				<?php
					}
				?>
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
		</body>
	</html>
