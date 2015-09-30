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
						<div class="panel-heading">Cadastro de Funcionário</div>
							<div class="panel-body">
								<form action="resultado.php" method="post">
									<label>Tipo Pessoa:</label>
									<input type="radio" name="tipoPessoa" id="pessoaFisica" checked="checked" value="pessoaFisica">
									<label for="pessoaFisica">Pessoa Física</label>
									<input type="radio" name="tipoPessoa" id="pessoaJuridica" value="pessoaJuridica">
									<label for="pessoaJuridica">Pessoa Juridica</label><br/>	
									<label for="cpf">CPF: </label>
									<input type="text" id="cpf" name="cpf"><br/>
									<label for="cpf">CNPJ: </label>
									<input type="text" id="cnpj" name="cnpj"><br/>
									<label for="nome">Nome: </label>
									<input type="text" id="nome" name="nome"><br/>
									<label>Sexo: </label>
									<input type="radio" name="sexo" id="masculino" value="masculino" checked="checked">
									<label for="masculino">Masculino</label>
									<input type="radio" name="sexo" id="feminino" value="feminino">
									<label for="feminino">Feminino</label><br/>
									<label for="email">Email: </label>
									<input type="email" id="email" name="email" required="required"><br/>
									<label for="telefone">Telefone: </label>
									<input type="text" id="telefone" name="telefone"><br/>
									<label for="cargo">Cargo</label>
									<select name="cargo" id="cargo">
										<option value="estagiario">Estágiario</option>
										<option value="gerente">Gerente</option>
										<option value="diretor">Diretor</option>
										<option value="presidente">Presidente</option>
									</select><br/>
									<label for="salario">Salário</label>
									<input type="number" step="any" id="salario" name="salario" placeholder="apenas numeros e ."><br/>
									<fieldset>
										<legend>Endereço</legend>
										<label for="cep">CEP: </label>
										<input type="text" name="cep" id="cep" ><br/>
										<label for="endereco">Endereço: </label>
										<input type="text" name="endereco" id="endereco" ><br/>
										<label for="uf">UF</label>
										<select name="uf" id="uf">
											<option value="df">DF</option>
											<option value="go">GO</option>
											<option value="ba">BA</option>
											<option value="sp">SP</option>
										</select><br/>
										<label for="municipio">Municipio</label>
										<select name="municipio" id="municipio">
											<option value="brasilia">Brasília</option>
											<option value="goiania">Goiania</option>
											<option value="salvador">Salvador</option>
											<option value="sao paulo">São Paulo</option>
										</select><br/>
										</fieldset>
									<fieldset>
										<legend>Perfil</legend>
											<input type="checkbox" name="financeiro" id="financeiro">
											<label for="financeiro">Financeiro</label><br/>
											<input type="checkbox" name="faturamento" id="faturamento">
											<label for="faturamento">Faturamento</label><br/>
											<input type="checkbox" name="contabilidade" id="contabilidade">
											<label for="contabilidade">Contabilidade</label><br/>
											<input type="checkbox" name="recursosHumanos" id="recursosHumanos">
											<label for="recursosHumanos">Recursos Humanos</label><br/>
										</fieldset>
									<label>Status: </label>
									<input type="radio" name="status" id="ativo" checked="checked" value="ativo">
									<label for="ativo">Ativo </label>
									<input type="radio" name="status" id="inativo" value="inativo">
									<label for="inativo">Inativo</label>	
									<input type="radio" name="status" id="pendente" value="pendente">
									<label for="pendente">Pendente</label><br/>
									<label for="senha">Senha: </label>
									<input type="password" required="required" name="senha" id="senha"><br/>
									<label for="confirmaSenha">Confirma Senha: </label>
									<input type="password" required="required" name="confirmaSenha" id="confirmaSenha"><br/>
									<label for="observacao">Observação</label>
									<textarea name="observacao" id="observacao" cols="30" rows="10"></textarea><br/>
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