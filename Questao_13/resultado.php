<head>
		<meta charset="utf-8">
		<title>Sua Idade</title>
	</head>

<?php
	$dias = $_POST['dias'];

	
	$somatoria = 20150903 - $dias;
	echo 'Seu ano de nascimento é :' . $somatoria;

?>