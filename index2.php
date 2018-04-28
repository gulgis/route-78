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
								<input id='pesquisar' name='pesquisar' placeholder='Digite sua pesquisa' type='text'/>
								<button value="buscar" id='search-button' type='submit'><span>Buscar</span></button>
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
				<div id="formulogin">			
					<p/>
						<a href="bike.php">Opções de Bike</a>
					<p/>	
						<a href="marca.php">Opções de Marca</a>
					<p/>	
						<a href="compra.php">Opções de Compra</a>
					<p/>	
						<a href="funcionario.php">Opções de Funcionario</a>
					<p/>	
						<a href="cliente.php">Opções de Cliente</a>					
				</div>
			</div>
		</div>	
		<div id="rodape2">
			<h4>ROUTE 78 - Proibida a reprodução total ou parcial do conteúdo desta página sem autorização prévia. </h4>
		</div>
	</div>
	</body>
</html>