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
				for ($cont = 1; $cont <= 200; $cont++){
					echo '<fieldset>';
						echo '<legend>Pesquisa de qualidade '.$cont.'</legend>';
						echo '<label for="nome_'.$cont.'">Qual nome do aluno '.$cont.'</label><br/>';
						echo '<input type="text" id="nome_'.$cont.'" name="nome_'.$cont.'"><br/>';
						echo '<label for="idade_'.$cont.'">Qual a idade do aluno '.$cont.'</label> <br/>';
						echo '<input type="number" id="idade_'.$cont.'" name="idade_'.$cont.'"><br/>';
						echo '<br/>';
						echo '<label>Qual a nota para a peça sendo 0 muito ruim e 10 muito bom</label>';
						echo '<label for="nota_'.$cont.'"> 0 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" checked="checked" value="0">';
						echo '<label for="nota_'.$cont.'"> 1 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="1">';
						echo '<label for="nota_'.$cont.'"> 2 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="2">';
						echo '<label for="nota_'.$cont.'"> 3 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="3">';
						echo '<label for="nota_'.$cont.'"> 4 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="4">';
						echo '<label for="nota_'.$cont.'"> 5 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="5">';
						echo '<label for="nota_'.$cont.'"> 6 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="6">';
						echo '<label for="nota_'.$cont.'"> 7 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="7">';
						echo '<label for="nota_'.$cont.'"> 8 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="8">';
						echo '<label for="nota_'.$cont.'"> 9 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="9">';
						echo '<label for="nota_'.$cont.'"> 10 </label>';
						echo '<input type="radio" name="nota_'.$cont.'" id="nota_'.$cont.'" value="10"><br/><br/><br/>';
					echo '</fieldset>';
					
						
				}
		?>			<input type="submit" name="enviar" id="enviar" value="Enviar">
					<input type="reset" name="limpar" id="limpar" value="Limpar">
				
				</form>
			</div>
		</body>	
</html>