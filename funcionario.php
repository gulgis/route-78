<?php
	session_start();
	include "conexao.php";
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
					<?php
						$pesquisa = mysql_query ("SELECT cod_fun,cpf_fun,end_fun,login_fun,senha_fun,nome_fun,tel_fun,acesso_fun,ativo_fun FROM funcionario");
						$rows = mysql_num_rows($pesquisa);
						for ($cont = 0; $cont < $rows; $cont++){
						$cod_fun = mysql_result($pesquisa,$cont,"cod_fun");
						$nome_fun = mysql_result ($pesquisa,$cont,"nome_fun");
					?>
					<table cellpadding=3>
					<tr>
						<td width="300px"><h3><?php echo "$nome_fun";?></h3></td>
						<td width="300px"><a href="altera_funcionario.php?cod=<?php echo "$cod_fun";?>">Alterar</a></td>				
					<tr/>	
					</table>
					<?php
						}
					?>
					<p/>
						<a href="cadastra_funcionario.php">Adicionar Funcionario</a>
					<br/>
						<a href="index2.php">Voltar</a>						
				</div>
			</div>
		</div>	
		<div id="rodape2">
			<h4>ROUTE 78 - Proibida a reprodução total ou parcial do conteúdo desta página sem autorização prévia. </h4>
		</div>
	</div>
	</body>
</html>