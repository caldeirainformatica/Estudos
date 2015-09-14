<?php
include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	


	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$numero3 = $_POST['numero3'];
	$maior = 0;
	
	if ($numero1 > $maior){
		$maior = $numero1;
	}
	if ($numero2 > $maior){
		$maior = $numero2;
	}
	if ($numero3 > $maior){
		$maior = $numero3;
	}
?>
<html>
	<body>
		<?php 
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
		?>
		<div class="container" style="margin-top: 60px;">
			<div class="row">
				<div class="col-md-12 col-sm-4 col-xs-6">
					<div class="panel panel-info">
						<div class="panel-heading"><font color="blue"><h2 align="center">Resultado</h2></font></div>
					<div class="panel-body">
						<form action="" class="form-inline" method="post">
							<?php 
							echo '<h1><kbd>O maior número é: ' . $maior . '</kbd></h1>';
							?>
					</div>
					<div class="panel-footer">
							<a href="index.php"><button type="button" class="btn btn-default" name="voltar">Voltar</button></a> 
						</form>
					</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>