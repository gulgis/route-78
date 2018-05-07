<?php
	session_start();
	include "conexao.php";
?>
<html>
	<head>
		<title>Pagina Funcionario</title>
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
				<br/>
					<?php
						/*este é o código que le cada linha para ver se há mais registos*/
						$pesquisa = mysqli_query($link, "SELECT * FROM funcionario");
						$rows = mysqli_fetch_assoc($pesquisa); //A função mysqli_fetch_assoc () busca uma linha de resultado como uma matriz associativa.	
						if(!$rows){
							echo "Sem Resultados.";
						}else{
							do{
								/*Este bloco de código gera uma tablea onde será apresentado o nome e o código do fincionário*/
								?>
								<table width="560"  align="center" border="1px" >
								<tr>
									<td width="500px" height="20px"><h3>NOME DO FUNCIONARIO</h3></td>
									<td width="200px" height="20px"><h3>CÓDIGO</h3></td>		
									<td width="200px" height="20px"><h3>FUNÇÃO</h3></td>
								<tr/>
								<tr>
									<td width="500px" height="15px"><h3><?php echo sprintf ("%s <br/>", $rows["nome_funcionario"]);?></h3></td>
									<td width="200px" height="15px"><h3><?php echo sprintf ("%s <br/>", $cod_funcionario = $rows["codigo_funcionario"]);?></h3></td>		
									<td width="200px" height="15px"><a href="altera_funcionario.php?cod=<?php echo "$cod_funcionario";?>"><h3>Alterar</h3></a></td>
	
								<tr/>
									
								</table>
								<?php
							}while($rows = mysqli_fetch_assoc($pesquisa));
								
						
					
						}
					?>
					<p/>
						<a href="cadastra_funcionariocionario.php">Adicionar Funcionario</a>
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