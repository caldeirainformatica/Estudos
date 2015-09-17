<html>
	<?php
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
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
								<h4 align="center"><label for="identificacao">Informe a identificação do aluno</label></h4>
								<input autofocus="autofocus" class="form-control text-uppercase"  type="text" required="required" id="identificacao" name="identificacao"><br/>
								
								
								
								<div class="col-md-4 col-sm-16 col-xs-16"">
									<div class="panel panel-success">
										<div class="panel-heading">
											<font color="black"><p align="center"><label for="nota1">Nota 1</label></p></font>
										</div>
										<div class="panel-body">
											<input type="number" min="0" required="required" id="nota1" name="nota1" class="form-inline">
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
											<input type="number" min="0" required="required" id="nota2" name="nota2" class="form-inline">
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
											<input type="number" min="0" required="required" id="nota3" name="nota3" class="form-inline">
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
											<input type="number" min="0" required="required" id="trabalho1" name="trabalho1" class="form-inline">
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
											<input type="number" min="0" required="required" id="trabalho2" name="trabalho2" class="form-inline">
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
											<input type="number" min="0" required="required" id="trabalho3" name="trabalho3" class="form-inline">
										</div>
									<div class="panel-footer"></div>
								
								</div>
								</div>
								
						</div>
						<div class="panel-footer">
								<button type="submit" class="btn btn-success" name="enviar">Enviar</button>
								<button type="reset" class="btn btn-warning" name="limpar">Limpar</button>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>