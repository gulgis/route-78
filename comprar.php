<?php
	session_start();
	include "conexao.php";
	
	$pesquisa = mysql_query("SELECT cod_vendas,horaedata_venda,valorrecebido_venda,valor_total_venda,funcionario_cod_fun,cliente_cod_cli,bikes_cod_bike FROM vendas");

	$query = mysql_query("SELECT cod_fun, nome_fun FROM funcionario");
	
	$query1 = mysql_query("SELECT cod_bike, modelo_bike FROM bikes");
	
	$query2 = mysql_query("SELECT cod_cli, nome_cli FROM cliente");
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
					<form action="processa_compra.php" method="post">
					<input type="hidden" name="codigo"/>
					<h2>Compra</h2>
						<table align="center">
							<tr>
								<td><p/><label for="fun"><h3>Funcionario: </h3></label>
									 <select name ="fun">
									 <option value="sel">Selecionar...</option>
									 <?php while($cod_fun = mysql_fetch_array($query)) { ?>
									 <option value="<?php echo $cod_fun['cod_fun'] ?>"><?php echo $cod_fun['nome_fun'] ?></option>
									 <?php } ?>
									 </select>
								</td>
								<td><p/><label for="cli"><h3>Cliente: </h3></label>
									 <select name ="cli">
									 <option value="sel">Selecionar...</option>
									 <?php while($cod_cli = mysql_fetch_array($query2)) { ?>
									 <option value="<?php echo $cod_cli['cod_cli'] ?>"><?php echo $cod_cli['nome_cli'] ?></option>
									 <?php } ?>
									 </select>
								</td>
								
							</tr>					
							<tr>
								<hr/>							
							</tr>							
								<td><label for="bike"><h3>Bike: </h3></label>
									 <select name ="bike">
									 <option value="sel">Selecionar...</option>
									 <?php while($cod_bike = mysql_fetch_array($query1)) { ?>
									 <option value="<?php echo $cod_bike['cod_bike'] ?>"><?php echo $cod_bike['modelo_bike'] ?></option>
									 <?php } ?>
									 </select>
								</td>							
								<td align="right"><p/><br/></p><input type="button" value=" Tirar " name="remover" id="del" >&nbsp <input type="button" value=" Adicionar " name="adcionar" id="add">
								</td>
							</tr>
							<tr>
							<tr/>
						</table>
						</p><input type="submit" value="Comprar">
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