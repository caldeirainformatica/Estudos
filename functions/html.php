<?php
	function gerarInputNumero($inputs){
		echo '<div class="container" style="margin-top: 60px">';
			echo '<form action="index.php" method="post">';
				echo '<h1>Digite os numeros abaixo para o calculo</h1><br/>';
			for ($cont = 1; $cont <= $inputs; $cont++){
				echo '<label for="numero_'.$cont.'">Digite o '.$cont.'º número</label><br/>';
				echo '<input type="number" min="0" name="numero_'.$cont.'" id="numero_'.$cont.'"><br/>';
		
			}
			echo '<input type="submit" name="enviar" value="Enviar">';
			echo '<input type="reset" name="limpar" value="Limpar">';
			echo '</form>';
		echo '</div>';
			
	
	}
	
	function calculaDobro(){
		$temp = 0;
		$num = array();
		echo '<div class="container" style="margin-top: 60px">';
		for ($cont = 1; $cont <= 30 ; $cont++){
			$temp = $_POST['numero_'.$cont];
			$num = $temp * 2;
			echo '<h1>O dobro do numero '.$temp . ' é '.  $num . '</h1>';
		}
	
		echo '</div>';
	}
	
	function somaTudo($quantidade) {
		$temp = 0;
		$num = 0;
		echo '<div class="container" style="margin-top: 60px">';
		for ($cont = 1; $cont <= $quantidade ; $cont++){
			$temp = $_POST['numero_'.$cont];
			if ($temp < 40){
			$num = $temp + $num;
			}
		}
	
		echo '</div>';
		return $num;
	}
	function verificaMaior($quantidade){
		$maior = 0;
		$temp = 0;
		for ($cont = 1; $cont <= $quantidade; $cont++){
			$temp = $_POST['numero_'.$cont];
			if ($maior < $temp){
				$maior = $temp;
			}
		}return $maior;
	}

	function verificaMenor($quantidade){
		$menor = 0;
		$temp = 0;
		for ($cont = 1; $cont <= $quantidade; $cont++){
			$temp = $_POST['numero_'.$cont];
			if ($menor > $temp){
				$menor = $temp;
			}
		}return $menor;
	}
	
	function media($quantidade){
		$soma = 0;
		$temp = 0;
		$media = 0;
		for ($cont = 1; $cont <= $quantidade; $cont++){
			$temp = $_POST['numero_'.$cont];
			$soma = $temp+$soma;
		}
		$media = $soma / ($cont - 1);
		return $media;
	}
	


?>
	
	
	