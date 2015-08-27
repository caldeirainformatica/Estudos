<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pergunta</title>
</head>
<body>
<?php 
	if (!empty($_POST)){
		$branco = $_POST ['branco'];
		$nulos = $_POST ['nulos'];
		$validos = $_POST ['validos'];
		$total = $_POST ['totalEleitores'];
		$erro = '';
	}
?>
	<h1 align="center">Informa Eleitores</h1>
	<form action="eleitores.php" method="post">
		<label for="totalEleitores">Numero de Eleitores: </label>
		<input type="number" min="0" required="true" autocomplete="off" step="any" placeholder="Digite o numero total de eleitores"
			id="totalEleitores" name="totalEleitores"> <br /> 
			<label for="branco">Votos Em Branco</label><input type="number" min="0" required="true" id="branco" name="branco"><br />
			<label for="nulos">Votos Em Branco</label><input type="number" min="0" required="true" id="nulos" name="nulos"><br /> 
			<label for="validos">Votos Em Branco</label><input type="number" min="0" required="true" id="validos" name="validos"><br /> 
			<input type="submit" value="Enviar"> <input type="reset" value="Limpar">
			
	
	<?php
	if (!empty($_POST)){
		if (($branco+$nulos+$validos) == $total){
			echo("<h5>O percentual de eletores que tiveram seus votos brancos, nulos e validos são: <br />");
			echo 'Brancos: ' . number_format((($branco/$total)*100),2,",",".") . '% com ' . $branco . ' votos no total <br />';
			echo 'Nulos: ' . number_format((($nulos/$total)*100),2,",",".") . '% com ' . $nulos . ' votos no total <br />';
			echo 'Validos: ' . number_format((($validos/$total)*100),2,",",".") . '% com ' . $validos . ' votos no total <br /></h5>';
		}else{
			echo '<h1>digite valores valido </h1>';
		}
	}else{
		echo 'Todos os campos acima são obrigatórios.';
	}
	
	?>
</body>
</html>


