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
				for ($cont = 1; $cont <= 10; $cont++){
						echo '<h1 align="center">Tabuada de ' . $cont.'</h1><br/>';
					for ($tabuada = 1; $tabuada <= 10; $tabuada++){
					echo '<div>';
						echo '<input type="number" disabled="disabled" value="'.$cont.'">';
						echo '<label>X</label>';
						echo '<input type="number" disabled="disabled" value="'.$tabuada.'">';
						echo '<label>=</label>';
						echo '<input type="number" disabled="disabled" value="'.$cont*$tabuada.'">';
					echo '</div>';
					
					}
				}
		?>						
				</form>
			</div>
		</body>	
</html>