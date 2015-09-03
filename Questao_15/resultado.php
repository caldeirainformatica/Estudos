<head>
		<meta charset="utf-8">
		<title>Segundos</title>
	</head>

<?php
	$segundos = $_POST['segundos'];

	$hora = $segundos / 3600;
	$minutos = $segundos / 60;
	
	echo 'O evento levou ' . $hora . ' horas <br />';
	echo 'O mesmo evento levou ' . $minutos . ' minutos';
?>