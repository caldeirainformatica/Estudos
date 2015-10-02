<html>
	<?php
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
		
		include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/functions/html.php';
		
		include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';
		
		?>
		<body>
			<div class="container" style="margin-top: 60px">
		<?php 
		if (isset($_POST['enviar'])){
			echo '<h1>O maior número lido é: ' . verificaMaior(30) . '</h1>';
			echo '<h1>O menor número lido é: ' . verificaMenor(30) . '</h1>';
			echo '<h1>A média dos número é: ' . media(30) . '</h1>';
		}else{
			gerarInputNumero(30);
		}
		
	?>
			</div>
		</body>	
</html>