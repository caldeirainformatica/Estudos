<?php
include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";

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
						<div class="panel-heading"><font color="blue"><h2 align="center">Exercício 1</h2></font></div>
					<div class="panel-body">
						<form action="resultado.php" class="form-inline" method="post">
							<label for="salario">Informe o salário<br></label>
							<input type="text" required="required" id="salario" name="salario" placeholder="788.00">
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

<!-- 1.	Uma empresa decide dar um aumento de 30% aos funcionários cujo salário é inferior a 1.000 reais.
 Escreva um Programa que receba o salário de um funcionário e imprima o valor do salário reajustado ou uma
  mensagem caso o funcionário não tenha direito ao aumento. -->