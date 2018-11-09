<?php
if(isset($_GET['check']))
{
	$val = $_GET['check'];
	foreach ($val as $key => $value) {
		echo "<div class='tableDone'>";
		echo "<h2>Table de ".$value."</h2>";
		for ($i=0; $i < 31; $i++) { 
			echo ("<div class='tableNum'>".$value." * ".$i." = ".$value*$i."</div>");
		}
		echo "</div>";
	}
}
?>