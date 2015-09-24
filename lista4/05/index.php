<html>
	<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	?>
		<body>
			<div class="container" style="margin-top: 60px">	
			
	<?php 
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
	
			for ($cont = 101; $cont < 111 ; $cont++){// por que ao incluir == o sistema não funciona?????
				echo "$cont<br/>";
				
			}
	
		?>
	
	
		</div>
	</body>
</html>

