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
					<div class="panel panel-primary">
						<div class="panel-heading"><font color="white"><h2 align="center">Exercício 3</h2></font></div>
					<div class="panel-body">
						<form action="resultado.php" class="form-inline" method="get">
							<label for="salarioMinimo">salário mínimo</label>
							<input class="form-control" id="salarioMinimo" required="required" name="salarioMinimo" type="number">
							<label for="horasTrabalhadas">Horas Trabalhadas</label>
							<input class="form-control" id="horasTrabalhadas" required="required" name="horasTrabalhadas" type="number"><br/><br/>
							<label for="dependentes">dependentes</label>
							<input class="form-control" id="dependentes" name="dependentes" required="required" type="number">
							<label for="horasTrabalhadasExtras">Horas Extras Trabalhadas</label>
							<input class="form-control" id="horasTrabalhadasExtras" required="required" name="horasTrabalhadasExtras" type="number"><br/>
					</div>
					<div class="panel-footer">
							<button type="submit" class="btn btn-success" name="enviar">Enviar</button>
							<button type="reset" class="btn btn-warning" name="limpar">Limpar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>