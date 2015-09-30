<html>
	<?php
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/head.php";
	?>
	<body>
		<div class="container" style="margin-top: 60px;">
	<?php 
		include_once "$_SERVER[DOCUMENT_ROOT]/workspace/Estudos/menu.php";
		
	$senha 			= $_POST['senha'];
	$confirmaSenha 	= $_POST['confirmaSenha'];
	$cpf 			= $_POST['cpf'];
	$cnpj 			= $_POST['cnpj'];
	$tipoPessoa 	= $_POST['tipoPessoa'];
	$nome 			= $_POST['nome'];
	$sexo			= $_POST['sexo'];
	$cargo 			= $_POST['cargo'];
	$status 		= $_POST['status'];
	$salario 		= $_POST['salario'];
	
	
	
	
	if ($senha == $confirmaSenha){
		echo '<h1>ITEM 3</h1>';
		echo '<p>As senha são iguais <br/>';
	}else {
		echo '<h1>ITEM 3</h1>';
		echo '<p>As senhas não são iguais, favor verificar<br/>';
	}
	
	
	if ($tipoPessoa == 'pessoaFisica'){
		if (empty($cpf)){
			echo '<h1>ITEM 4</h1>';
			echo '<p>CPF não informado<br/>'; 
		}
	}elseif ($tipoPessoa == 'pessoaJuridica'){
		if (empty($cnpj)){
			echo '<h1>ITEM 4</h1>';
			echo '<p>CNPJ não informado<br/>'; 
		}
	}
	
	echo '<br/>';
	
	if ($sexo == 'masculino'){
		
		echo '<h1>ITEM 5</h1>';
		echo 'Prezado Sr. ' . $nome . '<br/>';
		echo 'Você acaba de ser contratado como: ' . $cargo . '<br/>'; 
		echo 'Sua situação está ' . $status . '<br/>';
	}elseif ($sexo == 'feminino'){
		echo '<h1>ITEM 5</h1>';
		echo 'Prezada Sra. ' . $nome . '<br/>';
		echo 'Você acaba de ser contratado como: ' . $cargo . '<br/>'; 
		echo 'Sua situação está ' . $status . '<br/>';
	}
	
	if ($cargo == 'estagiario'){
		echo '<h1>ITEM 6</h1>';
		$novoSalario = ($salario * 2);
		echo 'Seu novo salário é ' . $novoSalario . ' Parabéns! Você foi contratado.';
	}elseif ($cargo == 'gerente'){
		echo '<h1>ITEM 6</h1>';
		$novoSalario = ($salario*1.5);
		echo 'Seu novo salário é ' . $novoSalario . ' Parabéns! Você foi contratado.';
	}elseif ($cargo == 'diretor'){
		echo '<h1>ITEM 6</h1>';
		$novoSalario = ($salario*1.3);
		echo 'Seu novo salário é ' . $novoSalario . ' Parabéns! Você foi contratado.';
	}else {
		echo '<h1>ITEM 6</h1>';
		$novoSalario = ($salario*1.1);
		echo 'Seu novo salário é ' . $novoSalario . ' Parabéns! Você foi contratado.';
	}
	?>
		</div>
	</body>
</html>