		<?php

		if (empty($_GET["high"])){
			$HighLight="1";
			}
		else{
			$HighLight= $_GET["high"];
			}
			?>

	
			
			
			<div class="header-actions">
				<div class="header-nav">
					<ul>
					<?php
					if ($HighLight =="1"){
						?>
						<li class="is-active">
						<?php
					}
					else {
						?>
						<li>
						<?php
					}
					
					if ($Taalnu == "EN"){
				?>
					  <a href="index.php?taal=EN&high=1">Home</a>

				<?php
					}
					else {
				?>
					<a href="index.php?taal=NL&high=1">Home</a>
				<?php
					}
				?>
							
						</li>
						
						
						
						<?php
					if ($HighLight =="2"){
						?>
						<li class="is-active">
						<?php
					}
					else {
						?>
						<li>
						<?php
					}
					?>
							<?php
					if ($Taalnu == "EN"){
				?>
					  <a href="afspraakmaken.php?taal=EN&high=2">Make an appointment</a>

				<?php
					}
					else {
				?>
					<a href="afspraakmaken.php?taal=NL&high=2">Afspraak maken</a>
				<?php
					}
				?>
						
			</li>
			<?php
					if ($HighLight =="3"){
						?>
						<li class="is-active">
						<?php
					}
					else {
						?>
						<li>
						<?php
					}
					?>
				<?php
					if ($Taalnu == "EN"){
				?>
					  <a href="productenbestellen.php?taal=EN&high=3">products</a>
				<?php
					}
					else {
				?>
					<a href="productenbestellen.php?taal=NL&high=3">Producten</a>
				<?php
					}
				?>
			</li>
			<?php
					if ($HighLight =="4"){
						?>
						<li class="is-active">
						<?php
					}
					else {
						?>
						<li>
						<?php
					}
					?>
				<?php
					if ($Taalnu == "EN"){
				?>
					  <a href="vragenmaken.php?taal=EN&high=4">question</a>
				<?php
					}
					else {
				?>
					<a href="vragenmaken.php?taal=NL&high=4">Vragen</a>
				<?php
					}
				?>
							
			</li>
			<?php
					if ($HighLight =="5"){
						?>
						<li class="is-active">
						<?php
					}
					else {
						?>
						<li>
						<?php
					}
					?>
				<?php
					if ($Taalnu == "EN"){
				?>
					  <a href="toerisme.php?taal=EN&high=5">Tourism</a>
				<?php
					}
					else {
				?>
					<a href="toerisme.php?taal=NL&high=5">Toerisme</a>
				<?php
					}
				?>
						</li>
					</ul>
				</div>
			</div>
		</div>
