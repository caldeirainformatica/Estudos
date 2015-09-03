<head>
		<meta charset="utf-8">
		<title>Segundos</title>
	</head>

<?php
	$segundos = $_POST['segundos'];

	$hora = intval($segundos / 3600);
	$minutos = (-1 * (intval(60 * ($hora - ($segundos / 3600)))));
	$aposVirgula = (60 * ($hora - ($segundos / 3600)));
	$segundosApurados = intval(intval(100 * (intval($aposVirgula) - $aposVirgula)) / 60);
		if ($aposVirgula > 60){
			$segundosApurados = 60 * $segundosApurados;
		}
		echo $aposVirgula;
		echo $segundosApurados;
	
	echo '<h1>O evento levou ' . $hora . 'hs ' . $minutos . ' Min ' . $segundosApurados . ' segundos <br /> </h1>';
?>