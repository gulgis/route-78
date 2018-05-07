<?
	session_start();
	include "conexao.php";
?>
<html>
	<head>
		<title>Pagina de acesso</title>
		<link href="estilos/style.css"rel="stylesheet" type="text/css" />
		<script language="javascript" type="text/javascript">
			function validar(){
				var login = form_login.login.value;
				var senha = form_login.senha.value;
				if (login == ""){
					alert ("Login em Branco");
					form_login.nome.focus();
					return false;
				}
				if (senha == ""){
					alert ("Senha em Branco");
					form_login.senha.focus();
					return false;
				}	
			}
		</script>
	</head>
	<body>
	<div id="body">	
		<div id="head">		
			<div id="usuario">
				<table id="logo_table2">					
					<td width=350><a href="index.php"><img src="imagens/logo.png" width=100 height=100/></a></td>
					</table>
			</div>			
		</div>
		<div id="menu">
		</div>	
		<div id="corpo">
			<div id="formulogin">
			<form id="formulario" method="post" name="form_login" action="processa_login.php"/>				
				<label> Login</label>
				<p/>
				<input type="text" name="login"/>
				<p/>
				<label> Senha</label>
				<p/>
				<input type="password" name="senha"/>
				<p/>
				<input type="submit" name="enviar" value="Entrar" onclick="return validar()"/>
				<input type="reset" name="limpar" value="Limpar"/>
			</form>
			</div>
		</div>	
		<div id="rodape2">
			<h4>ROUTE 78 - Proibida a reprodução total ou parcial do conteúdo desta página sem autorização prévia. </h4>
		</div>
	</div>
	</body>
</html>