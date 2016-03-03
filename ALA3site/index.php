<!DOCTYPE HTML>
	<html lang="nl">
		<head>		
			<link href="css/bootstrap.min.css" rel="stylesheet">
			<link rel="stylesheet" type="text/css" href="index.css">
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
					<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
					<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
					

			<link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
					
			<title>Home</title>
				
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
			<div class="row">
				<div class="col-xs-1">
				</div>
				<div class="col-md-3">
					<div class="well blok">
					<?php
					if ($Taalnu == "EN"){
				?>
					  <p>Welcome to the website of the town.<br> On this website you can find information about the tourism of the town and make a request.<br> 
					  You can ask questions and download a form by clicking on the buttons down below</p>
				<?php
					}
					else {
				?>
					<p> Welkom op de website van de gemeente <br>Op onze website kan je informatie vinden over de gemeente toerisme en aanvragen doen.
					<br>Als u een vraag wilt stelen of het aanvragen formulier wilt downloaden dan kunt u op een van knoppen de hieronder klikken.</p>
				<?php
					}
				?>
				<?php
					if ($Taalnu == "EN"){
				?>
					  <a href="vragenmaken.php?taal=EN"><button class="btn btn-default">Ask a question</button></a>
						<a href="requestForm.docx"><button type="submit" class="btn btn-default">Form</button></a>
				<?php
					}
					else {
				?>
					<a href="vragenmaken.php?taal=NL"><button class="btn btn-default">Stel uw vraag</button></a>
						<a href="aanvraagformulier.docx"><button type="submit" class="btn btn-default">Aanvraag formulier</button></a>
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
			</div>
		</body>
	</html>
