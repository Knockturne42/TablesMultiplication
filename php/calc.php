<?php
// if(isset($_POST['test']))
	// echo $_POST['tableChoice'];
	$num = intval($_POST['tableChoice']);
	include 'head.php';
	include 'form.php';
	echo "</main>";
	echo "<div class='tableDone'>";
	echo "<h2>Table de ".$num."</h2>";
	for ($i=0; $i < 31; $i++) { 
		echo ("<div class='tableNum'>".$num." * ".$i." = ".$num*$i."</div>");
	}
	echo "</div>";
	include 'foot.php';
?>