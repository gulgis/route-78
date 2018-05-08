<?php
	session_start();
	include "conexao.php";
	$cod = $_GET["cod"];
	
	$pesquisa = mysql_query("SELECT cpf_cli,end_cli,nome_cli,tel_cli FROM cliente WHERE cod_cli = '$cod'") or die(mysql_error());
	
	$nome_cli = mysql_result ($pesquisa, 0, "nome_cli");
	$cpf_cli = mysql_result ($pesquisa, 0, "cpf_cli");
	$end_cli = mysql_result ($pesquisa, 0, "end_cli");
	$tel_cli = mysql_result ($pesquisa, 0, "tel_cli");
?>
<html>
	<head>
		<title>Pagina de Estudo</title>
		<link href="../estilos/style.css" rel="stylesheet" type="text/css" />
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
					<td width=350><a href="index2.php"><img src="../imagens/logo.png" width=100 height=100/></a></td>
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
					<form action="processa_altera_cliente.php" method="post">
					<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>" />
						<p/>Nome: <input type="text" name="nome"value="<?php echo "$nome_cli"?>">
						<p/>CPF: <input type="text" name="cpf" value="<?php echo "$cpf_cli"?>">
						<p/>Endereço: <input type="text" name="end" value="<?php echo "$end_cli"?>">
						<p/>Telefone: <input type="text" name="tel" value="<?php echo "$tel_cli"?>">						
						</p><input type="submit" value="Alterar">
						<a href="cliente.php">Voltar</a>
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