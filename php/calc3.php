<?php
	if (isset($_GET['tabUser'])) {
		$_SESSION['val'] = intval($_GET['tabUser']);
		$_SESSION['ordi'] = rand(0, 30);
		echo "<p>Calcul a resoudre: ".$_SESSION['val']." * ".$_SESSION['ordi']."</p>";
	}
	echo '<form action="#" method="get" id="repInterro">';
	echo '<label for="userValue">Votre reponse</label>';
	echo '<input type="text" name="userValue" value="" id="userValue">';
	echo '<div class="jouer">';
	echo '<input type="submit" value="testez">';
	echo '</div>';
	echo '</form>';
	if (isset($_GET['userValue']))
	{
		$val2 = $_GET['userValue'];
		$rep = $_SESSION['val'] * $_SESSION['ordi'];
		if ($rep == $val2)
			echo "<p>Bonne reponse bien joue: ".$val2."</p>";
		else
			echo "<p>".$val2." n'est pas la bonne reponse, contrairement a ".$rep."</p>";
	}
?>