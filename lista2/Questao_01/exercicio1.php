<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>PhpExercício1</title>
</head>
<body>

<?php 
$nome  = $_POST['nome'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$nota4 = $_POST['nota4'];
echo '<h1 align="center">Resultado do Exercicio 1</h1>';
echo '<form action="index.html" method="post">';
echo '<label for="nome">Aluno: </label><input type="text" disabled="enable" id = "nome" name = "nome" value = " ' . $nome . '">';
echo '<br />';
echo '<br />';
echo '<label for="nota1">1º Nota </label><input type="number" disabled = "enable" value = "' . $nota1 . '" id="nota1" name="nota1"><br />';
echo '<label for="nota2">2º Nota </label><input type="number" disabled = "enable" value = "' . $nota2 . '" id="nota2" name="nota2"><br />';
echo '<label for="nota3">3º Nota </label><input type="number" disabled = "enable" value = "' . $nota3 . '" id="nota3" name="nota3"><br />';
echo '<label for="nota4">4º Nota </label><input type="number" disabled = "enable" value = "' . $nota4 . '" id="nota4" name="nota4"><br />';
$media = (($nota1 + $nota2 + $nota3 + $nota4)/4);
echo '<label for="media">Média </label><input type="text" disabled = "enable" value = "' . $media . '" id="media" name="media"><br />';
if ($media >= 7){
	echo '<font color="blue"><h1 align="left">APROVADO</h1></font>';
}else {
	echo '<font color="red"><h1 align="left">REPROVADO</h1></font>';
}

echo '<input type="submit" value="Voltar">';

echo '</form>';	
	?>
</body>
</html>
