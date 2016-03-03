		<?php

		if (empty($_GET["high"])){
			$HighLight="1";
			}
		else{
			$HighLight= $_GET["high"];
			}
			?>



<?php
	if ($Taalnu == "EN"){
	?>
    <a href="?taal=NL&high=
	<?php
	echo $HighLight;
	?>
	"><img src="images/nlvlag.jpg"
	 width="50" height="33" border="0" style="position: absolute; top: 4%; left: 93.73%;"/>
	 </a>
	<?php
	
	}
	
	else{
	?>	
    <a href="?taal=EN&high=
	<?php
	echo $HighLight;	
	?>
	"><img src="images/usaflag.jpg"
	 width="50" height="33" border="0" style="position: absolute; top: 4%; left: 93.73%;"/>
	 </a>
	<?php
		
	}
	?>


