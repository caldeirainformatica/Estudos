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
							<div class="panel-heading"><font color="blue"><h2 align="center">Exercício 3</h2></font></div>
						<div class="panel-body">
							<form action="resultado.php" class="form-inline" method="post">
								<label for="quantidadePessoas">Informe o quantitativo de pessoas</label><br/>
								<input type="number" required="required" id="quantidadePessoas" name="quantidadePessoas"><br/>
								<label for="tulipas">Informe o quantitativo de tulipas</label><br/>
								<input type="number" required="required" id="tulipas" name="tulipas"><br/>
								<label for="coberturas">Informe o quantitativo de coberturas</label><br/>
								<input type="number" required="required" id="coberturas" name="coberturas"><br/>
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