<?php
// if(isset($_POST['test']))
	// echo $_POST['tableChoice'];
	$num = intval($_POST['tableChoice']);
	include 'head.php';
	include 'form.php';
	echo "<div id='tableDone'>";
	for ($i=0; $i < 31; $i++) { 
		echo ("<div class='tableNum'>".$num." * ".$i." = ".$num*$i."</div>");
	}
	echo "</div>";
	include 'foot.php';
?>