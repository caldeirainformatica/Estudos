<?php
include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	


	$salario = $_POST['salario'];
	echo $salario;
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
							if ($salario<= 2000.00){
								$salario = $salario*1.5;
								echo '<h1><kbd>O seu novo salário é: R$ ' . number_format($salario,2,'.',',') . '</kbd></h1>';
							}else{
								$salario = $salario*1.3;
								echo '<h1><kbd>O seu novo salário é: R$ ' . number_format($salario,2,'.',',') . '</kbd></h1>';
							}
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