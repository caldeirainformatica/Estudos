<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Calculo Salário</title>
</head>
<body>
	<form action="resultadosalario.php" method="post">
		<label for="nome">Nome </label><br/>
		
		<input type="text" required="required" name="nome" id="nome"><br/>
		
		<label for="salario">Salário fixo: <br /></label>
		
		<input type="number" min="788.00" required="required" name="salario" id="salario"><br />
		
		<label for="valorTotalVendas">Digite o valor total das vendas <br /></label>
		
		<input type="number" min="0" placeholder="Apenas Numeros" required="required" step="any" name="valorTotalVendas" id="valorTotalVendas"><br />
		
		<label for="comissao">Comissão </label><br/>
		
		<input type="number" min="1" required="required" name="comissao" id="comissao" step="any">
		 
		<input type="submit" value="Calcular" name="calcular">
		
		<input type="reset" value="Limpar" name="limpar">
			
		
	</form>
</body>
</html>