<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$servidor = "localhost";
	$banco = "route-78";
	$usuario = "root";
	$senha = "";
	$link = @mysqli_connect($servidor, $usuario, $senha) or die ("Não foi possivel conectar ao Banco");
	$sql_banco = mysqli_select_db($link,$banco);

?>