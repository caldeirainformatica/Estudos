<html>
	<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	?>
		<body>
		
	<?php 
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
	
	function gerarInput($input){
			if (!empty($_GET)){
				echo '<div class="container" style="margin-top: 60px">';
					echo '<form action="index.php">';
						echo '<label for="input">Você escolheu ' .$_GET['input']. ' inputs</label><br/>';
						echo '<input type="number" style="display: none" id="input" name="input" value="'.$_GET['input'] . '" required="required"><br/>';
			for ($cont = 1; $cont <= $_GET['input']; $cont++){
						echo '<label for="num_' . $cont . '">Digite o ' . $cont . 'º valor</label><br/>';
						echo '<input type="number" id="num_' . $cont . '" name="num_'. $cont .'" required="required"><br/>';

			}
				
		 }
						echo '<input type="submit" name="enviar" value="enviar">';
						echo '<input type="reset" name="limpar" value="Limpar">';
					echo '</form>';
				echo '</div>';
	}
	
	
		function calcula(){
				$temp = 0;
				$somar = 0;
				$media = 0;
				$contador = 0;
				for ($cont = 1; $cont <= $_GET['input'] ; $cont++){
					$temp = $_GET['num_'.$cont];
					$somar = $somar + $temp;
					$contador = $contador + 1;
				}
				return ($somar / $contador);
			}
	
	echo '<div class="container" style="margin-top: 60px">';
	if (isset($_GET['enviar'])){
		echo 'A média aritmetica é: ' . calcula();
		
	}elseif (!empty($_GET)){
		gerarInput($_GET['input']);
		
		
	}else{
		?>
		 	<div class="container" style="margin-top: 60px">';
			<font color="red"><h1 align="center">Para começar, digite o numero de inputs na barra de endereços. 
											Exemplo <a href="index.php?input=5">
											localhos/workspace/Estudos/index.php?input=5</a></h1></font>
		</div>
	<?php }
	?>
	
		</form>
			</div>
	</body>
</html>

