<html>
	<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	?>
		<body>
		
	<?php 
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
		
	function gerarInput($input){
			
				echo '<div class="container" style="margin-top: 60px">';
					echo '<form action="index.php">';
// 						echo '<label for="input">Você escolheu ' .$_GET['input']. ' inputs</label><br/>';
// 						echo '<input type="number" style="display: none" id="input" name="input" value="'.$_GET['input'] . '" required="required"><br/>';
			for ($cont = 1; $cont <= 10; $cont++){
						echo '<label for="num_' . $cont . '">Digite o valor do ' . $cont . 'º</label><br/>';
						echo '<input type="number" id="num_' . $cont . '" name="num_'. $cont .'" required="required"><br/>';

			}
				
						echo '<input type="submit" name="enviar" value="enviar">';
						echo '<input type="reset" name="limpar" value="Limpar">';
					echo '</form>';
				echo '</div>';
	
		 }
	
	
	function calcular(){
			$temp = 0;
			$soma = 0;
			for ($cont = 1; $cont <= 10 ; $cont++){
				$temp = $_GET['num_'.$cont];
				$soma = $temp + $soma;
				
			}return $soma;

		}
	
	echo '<div class="container" style="margin-top: 60px">';
	if (isset($_GET['enviar'])){
		echo 'A soma dos números é: ' . calcular();
		
	}else{
		gerarInput(10);
		
		
	}
		?>
	
	
		</form>
			</div>
	</body>
</html>

