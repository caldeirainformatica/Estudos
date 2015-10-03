<html>
	<?php 
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	
 	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/functions/html.php';
	
 	include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';
	
	$sistemaInformacao = 0;
	$cienciaComputacao = 0;
	$engenhariaCivil = 0;
	$idadeSistemaInformacao = 0;
	$idadecienciaComputacao = 0;
	$idadeEngenhariaCivil = 0;
	$somaIdade1 = 0;
	$somaIdade3 = 0;
	$somaIdade2 = 0;
	$mediaIdade1 = 0;
	$mediaIdade2 = 0;
	$mediaIdade3 = 0;
	
		for ($cont = 1; $cont <= 500; $cont++){
			$curso = $_GET['cursoAluno_'.$cont];
			$idade = $_GET['idade_'.$cont];
			if ($curso == 1){
				$sistemaInformacao = $sistemaInformacao + 1;
				$somaIdade1 = $idade + $somaIdade1;
			}elseif ($curso == 2){
				$cienciaComputacao = $cienciaComputacao + 1;
				$somaIdade2 = $idade + $somaIdade2;
				echo $somaIdade2.'<br>';
				echo $cienciaComputacao.'<br>';
				
			}else {
				$engenhariaCivil = $engenhariaCivil + 1;
				$somaIdade3 = $idade + $somaIdade3;
				
			}
			
			if (($idade >19) && ($idade < 26)){
				if ($curso == 1){
					$idadeSistemaInformacao = $idadeSistemaInformacao + 1;
				}
				if ($curso == 2){
					$idadecienciaComputacao = $idadecienciaComputacao +1;
				}
				if ($curso == 3){
					$idadeEngenhariaCivil = $idadeEngenhariaCivil +1;
				}
			}
			
		}
		$mediaIdade1 = ($somaIdade1 / $sistemaInformacao);
		$mediaIdade2 = ($somaIdade2 / $cienciaComputacao);		
		$mediaIdade3 = ($somaIdade3 / $engenhariaCivil);		
		
	
		
		echo '<div class="container" style="margin-top: 60px">';
			echo 'No curso de Sistema de Informação tem ' . $sistemaInformacao . ' alunos. Dentre eles '. $idadeSistemaInformacao . ' tem idade entre 20 e 25 anos<br/>';
			echo 'No curso de Ciência da Computação tem ' . $cienciaComputacao . ' alunos. Dentre eles '. $idadecienciaComputacao . ' tem idade entre 20 e 25 anos<br/>';
			echo 'No curso de Engenharia Civil tem ' . $engenhariaCivil . ' alunos. Dentre eles '. $idadeEngenhariaCivil . ' tem idade entre 20 e 25 anos<br/>';
			if (($mediaIdade1 < $mediaIdade2) && ($mediaIdade1 < $mediaIdade3)){
				echo 'O curso com a menor média de idade é Sistema de Informção';
			}elseif (($mediaIdade2 < $mediaIdade1) && ($mediaIdade2 < $mediaIdade3)){
				echo 'O curso com a menor média de idade é Ciência da Computação';
			}else{
				echo 'O curso com a menor média de idade é Engenharia Civil';
			}
		echo '</div>';
		
	?>
</html>