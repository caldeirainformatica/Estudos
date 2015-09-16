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
								<label for="numero1">Informe o primeiro número<br></label>
								<input type="number" required="required" id="numero1" name="numero1">
								<label for="numero2">Informe o segundo número<br></label>
								<input type="number" required="required" id="numero2" name="numero2">
								<label for="numero3">Informe o terceiro número<br></label>
								<input type="number" required="required" id="numero3" name="numero3">
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