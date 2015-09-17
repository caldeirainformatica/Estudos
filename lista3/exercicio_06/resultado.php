<html>
	<?php
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	$identificacao = $_POST['identificacao'];
	$nota1 			= $_POST['nota1'];
	$nota2 			= $_POST['nota2'];
	$nota3 			= $_POST['nota3'];
 	$trabalho1 		= $_POST['trabalho1'];
 	$trabalho2 		= $_POST['trabalho2'];
 	$trabalho3 		= $_POST['trabalho3'];
 	$mediaTrabalho	= (($trabalho1 + $trabalho2 + $trabalho3)/3);
 	$mediaAproveitamento 	= ($nota1 + $nota2 * 2 + $nota3 * 3 + $mediaTrabalho)/7;
 	$conceito = 0;
	
 	if ($mediaAproveitamento >= 9.0){
 		$conceito = 'A';
 	} elseif (($mediaAproveitamento>=7.5) && ($mediaAproveitamento < 9.0)){
 		$conceito = 'B';
 	} elseif (($mediaAproveitamento>=6.0) && ($mediaAproveitamento < 7.5)){
 		$conceito = 'C';
 	} elseif (($mediaAproveitamento>=4.0) && ($mediaAproveitamento < 6.0)){
 		$conceito = 'D';
  	} elseif ($mediaAproveitamento < 4.0) {
  		$conceito = 'E';
 	}

 	?>
	<body>
	<?php 
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
	?>
		<div class="container" style="margin-top: 60px;">
				<div class="row">
					<div class="col-md-12 col-sm-4 col-xs-9">
						<div class="panel panel-info">
							<div class="panel-heading"><font color="blue"><h2 align="center">Exercício 6</h2></font></div>
						<div class="panel-body">
							<form action="resultado.php" method="post">
								<h4 align="center"><label for="identificacao">identificação do aluno</label></h4>
								<input autofocus="autofocus" class="form-control text-uppercase" value="<?php echo $identificacao?>" disabled="disabled" type="text" required="required" id="identificacao" name="identificacao"><br/>
								
								
								
								<div class="col-md-4 col-sm-16 col-xs-16"">
									<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="nota1">Nota 1</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" id="nota1" value="<?php echo $nota1?>" disabled="disabled" name="nota1" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>
										
								
								<div class="col-md-4 col-sm-16 col-xs-16"">
								<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="nota2">Nota 2</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" value="<?php echo $nota2?>" id="nota2" disabled="disabled" name="nota2" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>
								<div class="col-md-4 col-sm-16 col-xs-16">
								<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="nota3">Nota 3</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" id="nota3" value="<?php echo $nota3?>" disabled="disabled" name="nota3" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>





								
								<div class="col-md-4 col-sm-16 col-xs-16"">
									<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="trabalho1">Trabalho 1</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" value="<?php echo $trabalho1?>" disabled="disabled" id="trabalho1" name="trabalho1" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>
										
								
								<div class="col-md-4 col-sm-16 col-xs-16"">
								<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="trabalho2">trabalho 2</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" value="<?php echo $trabalho2?>" disabled="disabled"  id="trabalho2" name="trabalho2" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>
								<div class="col-md-4 col-sm-16 col-xs-16">
								<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="trabalho3">trabalho 3</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" id="trabalho3" value="<?php echo $trabalho3?>" disabled="disabled"  name="trabalho3" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>
								
						</div>
						<div class="panel-footer">
						
								<a class="btn btn-default" href="index.php" role="button">Voltar</a>
								<label for="mediaTrabalho">Media do Trabalhos</label>
								<input type="text" disabled="disabled" id="meidaTrabalho" name="mediaTrabalho" value="<?php
													echo number_format($mediaTrabalho,2,'.',',');?>">
								<label for="mediaAproveitamento">Média Aproveitamento</label>
								<input type="text" id="mediaAproveitamento" name="mediaAproveitamento" disabled="disabled" value="<?php
													echo number_format($mediaAproveitamento,2,'.',',');?>" >
								<label for="conceito">Conceito</label>
								<input type="text" id="conceito" name="conceito" disabled="disabled" value="<?php
									if (($conceito == 'A') or ($conceito == 'B') or ($conceito == 'C')){
										echo $conceito . ' - APROVADO';
										
									}elseif (($conceito == 'D') or ($conceito == 'E')){
										echo $conceito . ' - REPROVADO ';
									}else{
										echo 'ERRO';
									}?>" >
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>