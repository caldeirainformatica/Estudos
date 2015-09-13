<html>
	<html>
	<?php include_once '..\..\head.php';?>
	<body>
	<?php include_once '..\..\menu.php';?>
		<?php 
			$carrosVendidos = $_POST['numeroCarros'];
 			$valorTotalVendas = $_POST['valorTotalVendas'];
			$salario = $_POST['salarioFixo'];
			$percentual = 0.05;
			$comissaoCadaCarro = $_POST['comissaoCadaCarro'];
			$comissaoCadaCarroTotal = ($valorTotalVendas*($carrosVendidos*($comissaoCadaCarro/100)));
			$comissaoFixa = $valorTotalVendas*0.05;
			
			
			
			echo '<font color="blue"><h1 align="center">O salário do vendedor é ' . number_format(($salario+$comissaoFixa+$comissaoCadaCarroTotal),2,',','.') . '</h1></font>';
		?>
		
		<form action="CalculoVendas.php">
			<a href="CalculoVendas.php">Clique aqui para voltar</a>
		
		</form>
				
	</body>
		
		
		
		
		
		numero de carro
		valor total de vendas
		salario fixo
		5% valor das vendas
	
	
	


</html>