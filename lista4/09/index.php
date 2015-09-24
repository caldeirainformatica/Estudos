<html>
	<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	?>
		<body>
		
	<?php 
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
	
	$intervalo = 0;
	$foraIntervalo = 0;
	
	
	function gerarInput($input){
			if (empty($_GET)){
				echo '<div class="container" style="margin-top: 60px">';
					echo '<form action="index.php">';
// 						echo '<label for="input">Você escolheu ' .$_GET['input']. ' inputs</label><br/>';
// 						echo '<input type="number" style="display: none" id="input" name="input" value="'.$_GET['input'] . '" required="required"><br/>';
			for ($cont = 1; $cont < 11; $cont++){
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
				global $intervalo;
				global $foraIntervalo;
				for ($cont = 1; $cont <= 10 ; $cont++){
					$temp = $_GET['num_'.$cont];
					if (($temp >= 10) and ($temp <= 20)){
						$intervalo = $intervalo + 1;
					}else{
						$foraIntervalo = $foraIntervalo + 1;
					}
					
				}
	
			}
	
	echo '<div class="container" style="margin-top: 60px">';
	if (isset($_GET['enviar'])){
		calcula();
		echo 'Existe ' . $intervalo . ' números no intervalo<br/>';
		echo 'Existe ' . $foraIntervalo . ' números fora do intervalo<br/>';
	}elseif (empty($_GET)){
		gerarInput(10);
		
		
// 	}else{
// 		?>
		<div class="container" style="margin-top: 60px">';
<!-- 			<font color="red"><h1 align="center">Para começar, digite o numero de inputs na barra de endereços.  -->
<!-- 											Exemplo <a href="index.php?input=5"> -->
<!-- 											localhos/workspace/Estudos/index.php?input=5</a></h1></font> -->
<!-- 		</div> -->
	<?php }
// 	?>
	
		</form>
			</div>
	</body>
</html>

