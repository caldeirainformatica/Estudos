<?php
include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	


	$salarioMinimo 			= $_GET['salarioMinimo'];
	$horasTrabalhadas		= $_GET['horasTrabalhadas'];
	$dependentes 			= $_GET['dependentes'];
	$horasTrabalhadasExtras = $_GET['horasTrabalhadasExtras'];
	$valorHoraTrabalhada 	= (($salarioMinimo / 5) * $horasTrabalhadas);
	$salarioMes				= ($horasTrabalhadas * $valorHoraTrabalhada);
	$valorDependentes		= ($dependentes * 32);
	$valorHoraExtra			= (($salarioMinimo / 5 ) * $horasTrabalhadasExtras)*1.5;
	$salarioBruto			= ($salarioMes + $valorDependentes + $valorHoraExtra);
	$salarioLiquido			= 0;
	$impostoRenda			= 0;
	$gratificacao			= 0;
	$aReceber				= 0;
	
	if ($salarioBruto < 2000){
		$impostoRenda = 0;
	}elseif (($salarioBruto >= 2000) and ($salarioBruto <= 5000)){
		$impostoRenda = ($salarioBruto * 0.1);
	}else {
		$impostoRenda = ($salarioBruto * 0.2);
	}
		
	$salarioLiquido = $salarioBruto - $impostoRenda;
	
	if ($salarioLiquido <= 3500){
		$gratificacao = 1000;
	}else{
		$gratificacao = 500;
	}
	$aReceber = $salarioLiquido + $gratificacao
	
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
							<label for="salarioBruto">O valor do salário Bruto é</label><br/>
							<input type="text" name="salarioBruto" id='salarioBruto' disabled="disabled" value=<?php echo number_format($salarioBruto,2,'.',','); ?>><br/>
							<label for="imposto">O valor do imposto é</label><br/>
							<input type="text" name="imposto" id='imposto' disabled="disabled" value=<?php echo number_format(($impostoRenda * -1),2,'.',','); ?>><br/>
							<label for="valorHoraExtra">O valor da hora extra é</label><br/>
							<input type="text" name="valorHoraExtra" id='valorHoraExtra' disabled="disabled" value=<?php echo number_format($valorHoraExtra,2,'.',','); ?>><br/>
							<label for="salarioLiquido">O valor do salário Liquido é</label><br/>
							<input type="text" name="salarioLiquido" id='salarioLiquido' disabled="disabled" value=<?php echo number_format($salarioLiquido,2,'.',','); ?>><br/>
							<label for="aReceber">O valor a receber é</label><br/>
							<input type="text" name="aReceber" id='aReceber' disabled="disabled" value=<?php echo number_format($aReceber,2,'.',','); ?>><br/>
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