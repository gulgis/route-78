<?php
	session_start();
	include "conexao.php";
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	$resultado = mysql_query("SELECT login_fun,senha_fun FROM funcionario WHERE login_fun = '$login' AND senha_fun = '$senha' AND ativo_fun = 1");
	$linha = mysql_num_rows($resultado);
	
	if ($linha == true){
		$_SESSION ["login"] = $login;
		echo "<script> location.href= 'index2.php'</script>";
	}else{
		echo "<script> alert ('Login Inválido')</script>";
		echo "<script> location.href= ('index.php')</script>";
	}
?>