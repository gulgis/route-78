<?php
	session_start();
	include "conexao.php"; //conexão com o banco de dados 
	
	$cod_funcionario = $_GET["cod"];// vai receber o codigo do funcionário que foi solicitado fazer a alteracao na pagina funcionario.php
	
	$pesquisa = mysqli_query ($link, "SELECT * FROM funcionario WHERE codigo_funcionario= '$cod_funcionario'") or die(mysql_error()); //seleciona todos os campos de acordo com o código fornecio em funcionario
	$values = mysqli_fetch_array($pesquisa); //A função mysqli_fetch_assoc () busca uma linha de resultado como uma matriz associativa.	
	/* echo $values['nome_funcionario'];
	echo $values['sexo_funcionario'];
	echo $values['cpf_funcionario'];
	echo $values['rg_funcionario'];
	echo $values['endereco_funcionario'];
	echo $values['telefone1_funcionario'];
	echo $values['telecone2_funcionario'];
	echo $values['email_funcionario'];
	echo $values['login_funcionario'];
	echo $values['senha_funcionario'];
	echo $values['ativo_funcionario']; */
			
?>
<html>
	<head>
		<title>Pagina de Estudo</title>
		<link href="estilos/style.css"rel="stylesheet" type="text/css" />	
	</head>
	<body>
	<div id="body">	
		<div id="head">		
			<div id="usuario">
				<div id="sair">
					<?php
						include "in_login.php";
					?>
				</div>
				<table id="logo_table">					
					<td width=350><a href="index2.php"><img src="imagens/logo.png" width=100 height=100/></a></td>
					<td width=250>
						<div id='search-box'>
							<form action="busca.php" id='search-form' method='get' target='_top'>
								<input id='pesquisa' name='pesquisa' placeholder='Digite sua pesquisa' type='text'/>
								<button id='search-button' type='submit'><span>Buscar</span></button>
							</form>
						</div>	
					  </td>	
				</table>
			</div>			
		</div>
		<div id="menu">	
		</div>	
		<div id="corpo">
			<div id="opcao">
				<div id="dados">						
					<form action="processa_altera_funcionariocionario.php" method="post">
						<input type="hidden" name="codigo" value="<?php echo $values['$cod_funcionario'];?>"/>
						<table width="560" align="center" border="1px">
							<p/>Nome: <input type="text" name="nome"value="<?php echo $values['nome_funcionario'];?>">
							<p/>Sexo: <input type="text" name="sexo"value="<?php echo $values['sexo_funcionario'];?>">
							<p/>CPF: <input type="text" name="cpf"value="<?php echo $values['cpf_funcionario'];?>">
							<p/>RG: <input type="text" name="rg"value="<?php echo $values['rg_funcionario'];?>">
							<p/>Endereço: <input type="text" name="endereco" value="<?php echo $values['endereco_funcionario'];?>">
							<p/>Telefone 1: <input type="text" name="telefone1" value="<?php echo $values['telefone1_funcionario'];?>"> 						
							<p/>Telefone 2: <input type="text" name="telefone2" value="<?php echo $values['telecone2_funcionario'];?>">						
							<p/>Email: <input type="text" name="email" value="<?php echo $values['email_funcionario'];?>">
							<p/>Login: <input type="text" name="login"value="<?php echo $values['login_funcionario'];?>">
							<p/>Senha: <input type="text" name="senha"value="<?php echo $values['senha_funcionario'];?>">			
							<p/><label for="acesso">Acesso:</label>
							<select name="acesso"/> 
								<option value ="sel">Selecione...</option>
								<option value="adm">Administrador</option> 
								<option value="fun">Funcionario</option>
							</select>						
							<p/><label for="ativo">Ativo</label>
							 <select name="ativo">
								 <option value="sel">Selecione...</option>
								 <option value="sim">Ativo</option>
								 <option value="nao">Inativo</option>
							 </select>
						</table>	 
							<h4>Não esqueça de selecionar ACESSO e ATIVO </h4>
						</p><input type="submit" value="Alterar">
						<a href="funcionario.php">Voltar</a>
					</form>
				</div>
			</div>
		</div>	
		<div id="rodape2">
			<h4>ROUTE 78 - Proibida a reprodução total ou parcial do conteúdo desta página sem autorização prévia. </h4>
		</div>
	</div>
	</body>
</html>