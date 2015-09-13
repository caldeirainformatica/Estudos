<html>
	<head>
		<meta charset="utf-8">
		<title>Insert title here</title>
	</head>
	<body>
		<?php
			$numero1 = $_POST['numero1'];
			$numero2 = $_POST['numero2'];
			$soma = $numero1+$numero2;
			
			$resultado = $soma*$numero1;
			
			echo '<h1> O resultado da somatoria dos numero e multiplicando pelo primeiro é: '. $resultado . '</h1>';
		?>
			<a href="index.php">voltar</a>
	</body>
</html>