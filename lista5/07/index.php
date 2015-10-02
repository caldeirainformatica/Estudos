<html>
	<?php
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
		
		include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/functions/html.php';
		
		include_once $_SERVER['DOCUMENT_ROOT'].'/workspace/Estudos/menu.php';
		
		?>
		<body>
			<div class="container" style="margin-top: 60px">
				<form action="resultado.php">
		<?php 
				for ($cont = 1; $cont <= 500; $cont++){
					echo '<p><label for="codCurso_'.$cont.'">Qual o curso do aluno '.$cont.'</label>';
					echo '<select name="cursoAluno_'.$cont.'">';
						echo '<option value="1" id="codCurso'.$cont.'">1-Sistemas de informação</option>';
						echo '<option value="2" id="codCurso'.$cont.'">2-Ciência da computação</option>';
						echo '<option value="3" id="codCurso'.$cont.'">3-Engenharia civil</option>';
					echo '</select>';
					echo '    ';
					echo '<label for="idade_'.$cont.'">Idade   .</label>';
					echo '<input type="number" id="idade_'.$cont.'" name="idade_'.$cont.'"><br/>';
						
				}
		?>			<input type="submit" name="enviar" id="enviar" value="Enviar">
					<input type="reset" name="limpar" id="limpar" value="Limpar">
				
				</form>
			</div>
		</body>	
</html>