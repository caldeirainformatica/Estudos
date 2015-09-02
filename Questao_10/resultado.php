<html>
	<head>
		<meta charset="utf-8">
		<title>Insert title here</title>
	</head>
	<body>
		<?php
			$minimo = $_POST['minimo'];
			$maximo = $_POST['maximo'];
			$estoqueMedio = (($minimo+$maximo) /2);
			
			
			echo '<h1> O estoque médio é: ' . $estoqueMedio . '</h1>';
		?>
			<a href="estoque_medio.html">voltar</a>
	</body>
</html>