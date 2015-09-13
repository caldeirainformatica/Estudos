<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calculo Idade</title>
</head>
<body>
		
		
		<?php
		if (! empty ( $_POST )) {
			$ano = $_POST ['ano'];
			$mes = $_POST ['mes'];
			$dia = $_POST ['dia'];
			
			if (($ano < 1915) or ($ano > 2015)) {
				?>
					<font color="red">O ano digitado é invalido, tente novamente</font><br />
					<form action="index.php" method="post">
						<h1>Digite a sua data de nascimento abaixo</h1>
						
						<label for="ano">Ano </label> 
						
						<input type="number" min="1915" placeholder="1984" name="ano" id="ano"> 
						
						<label for="mes"> Mês </label>
						
						<input type="number" name="mes" id="mes" placeholder="12" min="1"> 
						
						<label for="dia"> dia </label> 
						<input type="number" name="dia" id="dia" placeholder="30" min="1"><br /><br /> 
						<input type="submit" name="enviar" value="Enviar"> 
						<input type="reset" name="limpar" value="Limpar">
					</form>
		<?php
			
			} elseif (($mes < 1) or ($mes > 12)) {
				?>
					<font color="red">O mês digitado é invalido, tente novamente</font><br />
					<form action="dados_idade.php" method="post">
						<h1>Digite a sua data de nascimento abaixo</h1>
						
						<label for="ano">Ano </label> 
						
						<input type="number" min="1915" placeholder="1984" name="ano" id="ano"> 
						
						<label for="mes"> Mês </label>
						
						<input type="number" name="mes" id="mes" placeholder="12" min="1"> 
						
						<label for="dia"> dia </label> 
						<input type="number" name="dia" id="dia" placeholder="30" min="1"><br /><br /> 
						<input type="submit" name="enviar" value="Enviar"> 
						<input type="reset" name="limpar" value="Limpar">
					</form>
							<?php
			} elseif (($dia < 1) or ($dia > 31)) {
				?>
					<font color="red">O dia digitado é invalido, tente novamente</font> <br />
					<form action="dados_idade.php" method="post">
						<h1>Digite a sua data de nascimento abaixo</h1>
						
						<label for="ano">Ano </label> 
						
						<input type="number" min="1915" placeholder="1984" name="ano" id="ano"> 
						
						<label for="mes"> Mês </label>
						
						<input type="number" name="mes" id="mes" placeholder="12" min="1"> 
						
						<label for="dia"> dia </label> 
						<input type="number" name="dia" id="dia" placeholder="30" min="1"><br /><br /> 
						<input type="submit" name="enviar" value="Enviar"> 
						<input type="reset" name="limpar" value="Limpar">
					</form>
				<?php
			} else {
				if (($mes<10) and (strlen($mes)<2)){
					$mes = 0 . $mes;
				}else
				if (($dia<10) and (strlen($dia)<2)) {
					$dia = 0 . $dia;	
				}
				$converteData = $ano . $mes . $dia;
				$somatoria = 20150903 - $converteData;
				
				echo '<h1> A pessoa viveu ' . $somatoria . ' dias';				
			}
		} else {
			?>
					<form action="dados_idade.php" method="post">
						<h1>Digite a sua data de nascimento abaixo</h1>
						
						<label for="ano">Ano </label> 
						
						<input type="number" min="1915" placeholder="1984" name="ano" id="ano"> 
						
						<label for="mes"> Mês </label>
						
						<input type="number" name="mes" id="mes" placeholder="12" min="1"> 
						
						<label for="dia"> dia </label> 
						<input type="number" name="dia" id="dia" placeholder="30" min="1"><br /><br /> 
						<input type="submit" name="enviar" value="Enviar"> 
						<input type="reset" name="limpar" value="Limpar">
					</form>
		<?php }?>
	</body>
</html>