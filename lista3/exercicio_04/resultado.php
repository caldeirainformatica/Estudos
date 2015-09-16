<?php
include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
?>	
<html>
	<body>
	<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
	
	$quantidadePessoas = $_POST['quantidadePessoas'];
	$tulipas = $_POST['tulipas'];
	$coberturas = $_POST['coberturas'];
	
	if (($quantidadePessoas <= 0) or ($tulipas <= 0) or ($coberturas <= 0)){
		?>
<div class="container" style="margin-top: 60px;">
			<div class="row">
				<div class="col-md-12 col-sm-4 col-xs-6">
					<div class="panel panel-info">
						<div class="panel-heading"><font color="blue"><h2 align="center">Resultado</h2></font></div>
					<div class="panel-body">
						<form action="" class="form-inline" method="post">
							<h1>Impossivel efetuar qualquer tipo de calculo com os valores informados, clique no botão abaixo para tentar novamente</kbd>
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
		
	<?php 
	}else{
	$total = (((($tulipas*4.8) + ($coberturas*1.5)+17)* 1.1) /$quantidadePessoas);
	
?>

		<?php 
		
		?>
		<div class="container" style="margin-top: 60px;">
			<div class="row">
				<div class="col-md-12 col-sm-4 col-xs-6">
					<div class="panel panel-info">
						<div class="panel-heading"><font color="blue"><h2 align="center">Resultado</h2></font></div>
					<div class="panel-body">
						<form action="" class="form-inline" method="post">
							<?php 
							echo '<h1><kbd>O valor a pagar por pessoa é: ' . $total . '</kbd></h1>';
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
<?php }?>