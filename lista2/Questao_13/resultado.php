<html>
	<?php include_once '..\..\head.php';?>
<body>
	<?php include_once '..\..\menu.php';?>

<?php
	$dias = $_POST['dias'];

	
	
	$somatoria = 20150903 - $dias;
	echo 'A sua data de nascimento, configurada em ANO, MES e DIA é :' . $somatoria;

?>
	<a href="index.php">Voltar</a>