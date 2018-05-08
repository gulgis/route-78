<?php
	session_start();
	include "conexao.php";
	$cod = $_GET["cod"];
	$pesquisa = mysql_query ("SELECT aro_bike,ativo_bike,cor_bike,marcha_bike,modalidade_bike,modelo_bike,preco_bike,suspensao_bike,marca_cod_marca FROM bikes WHERE cod_bike = '$cod'")or die(mysql_error());
	
	$query = mysql_query("SELECT cod_marca, nome_marca FROM marca");
	
	$aro_bike = mysql_result ($pesquisa, 0, "aro_bike");
	$ativo_bike = mysql_result ($pesquisa, 0, "ativo_bike");
	$cor_bike = mysql_result ($pesquisa, 0, "cor_bike");
	$marcha_bike = mysql_result ($pesquisa, 0, "marcha_bike");
	$modalidade_bike = mysql_result ($pesquisa, 0, "modalidade_bike");
	$modelo_bike = mysql_result ($pesquisa, 0, "modelo_bike");
	$preco_bike = mysql_result ($pesquisa, 0, "preco_bike");
	$suspensao_bike = mysql_result ($pesquisa, 0, "suspensao_bike");
	$marca_cod_marca = mysql_result ($pesquisa, 0, "marca_cod_marca");
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
					<form action="processa_altera_bike.php" method="post">
					<input type="hidden" name="codigo" value="<?php echo "$cod"; ?>" />
						<p/>Modelo: <input type="text" name="modelo"value="<?php echo "$modelo_bike"?>">
						<p/>Suspensao: <input type="text" name="suspensao" value="<?php echo "$suspensao_bike"?>">
						<p/>Cor: <input type="text" name="cor" value="<?php echo "$cor_bike"?>">
						<p/>Marcha: <input type="text" name="marcha" value="<?php echo "$marcha_bike"?>">
						<p/>Modalidade: <input type="text" name="modalidade" value="<?php echo "$modalidade_bike"?>">
						<p/>Preço: <input type="text" name="preco" value="<?php echo "$preco_bike"?>">
						<p/>Aro: <input type="text" name="aro" value="<?php echo "$aro_bike"?>">
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
						</p><input type="submit" value="Alterar">
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