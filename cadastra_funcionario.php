<?php
	session_start();
	include "conexao.php";
	$cod = $_GET["cod"];
	
	$pesquisa = mysql_query ("SELECT cod_fun,cpf_fun,end_fun,login_fun,senha_fun,nome_fun,tel_fun,acesso_fun,ativo_fun FROM funcionario WHERE cod_fun= '$cod'") or die(mysql_error());
	
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
					<form action="processa_cadastra_funcionario.php" method="post">
					<input type="hidden" name="codigo"/>
						<p/>Nome: <input type="text" name="nome"/>
						<p/>Login: <input type="text" name="login"/>
						<p/>Senha: <input type="text" name="senha"/>
						<p/>CPF: <input type="text" name="cpf"/>
						<p/>Endereço: <input type="text" name="end"/>
						<p/>Telefone: <input type="text" name="tel"/>						
						<p/><label for="acesso">Acesso:</label>
						<select name="acesso"/> 
							<option value ="sel">Selecione</option>
							<option value="adm">Administrador</option> 
							<option value="fun">Funcionario</option>
						</select>						
						<p/><label for="ativo">Ativo</label>
						 <select name="ativo">
							 <option value="sel">Selecione...</option>
							 <option value="sim">Ativo</option>
							 <option value="nao">Inativo</option>
						 </select>
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