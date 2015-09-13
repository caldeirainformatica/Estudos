<head>
		<meta charset="utf-8">
		<title>Sua Idade</title>
	</head>

<?php
	$dias = $_POST['dias'];

	
	
	$somatoria = 20150903 - $dias;
	echo 'A sua data de nascimento, configurada em ANO, MES e DIA é :' . $somatoria;

?>
	<a href="index.php">Voltar</a>