<?php
if(isset($_GET['tableChoice']))
{
	$num = intval($_GET['tableChoice']);
	echo "<div class='tableDone'>";
	echo "<h2>Table de ".$num."</h2>";
	for ($i=0; $i < 31; $i++) { 
		echo ("<div class='tableNum'>".$num." * ".$i." = ".$num*$i."</div>");
	}
	echo "</div>";
}
?>