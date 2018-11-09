<?php
	if (isset($_GET['userValue']))
	{
		$val2 = $_GET['userValue'];
		$rep = $val * $ordi;
		if ($rep == $val2)
			echo "<p>Bonne reponse bien joue: ".$val2."</p>";
		else
			echo "<p>".$val2." n'est pas la bonne reponse, contrairement a ".$rep."</p>";
	}
?>