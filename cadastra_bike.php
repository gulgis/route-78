<?php
	session_start();
	include "conexao.php";
	$query = mysql_query("SELECT cod_marca, nome_marca FROM marca");

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
					<form action="processa_cadastra_bike.php" method="post">
					<input type="hidden" name="codigo"/>
						<p/>Modelo: <input type="text" name="modelo">
						<p/>Suspensao: <input type="text" name="suspensao">
						<p/>Cor: <input type="text" name="cor">
						<p/>Marcha: <input type="text" name="marcha">
						<p/>Modalidade: <input type="text" name="modalidade">
						<p/>Preço: <input type="text" name="preco">
						<p/>Aro: <input type="text" name="aro">
						<p/><label for="marca">Selecione uma Marca: </label>
						 <select name ="marca">
						 <option value="sel">Selecionar...</option>
						 <?php while($cod_marca = mysql_fetch_array($query)) { ?>
						 <option value="<?php echo $cod_marca['cod_marca'] ?>"><?php echo $cod_marca['nome_marca'] ?></option>
						 <?php } ?>
						 </select>
						<p/><label for="ativo">Ativo:</label>
						<select name="ativo"/> 
							 <option value="sel">Selecionar...</option>
							<option value="sim">Ativo</option> 
							<option value="nao">Inativo</option>
						</select>
						<h4>Não esqueça de selecionar MARCA e ATIVO </h4>
						</p><input type="submit" value="Cadastrar">
						<a href="bike.php">Voltar</a>
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