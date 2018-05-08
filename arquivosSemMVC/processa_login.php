<?php
	session_start();
	include "conexao.php";
	
	$login = $_POST["login"];
	$senha = $_POST["senha"];
	
	$resultado = mysqli_query($link, "SELECT login_funcionario,senha_funcionario 
							  FROM funcionario 
							  WHERE login_funcionario = '$login' AND senha_funcionario = '$senha' AND ativo_funcionario = 1");
	$linha = mysqli_num_rows($resultado);
	
	if ($linha == true){
		$_SESSION ["login"] = $login;
		echo "<script> location.href= 'index2.php'</script>";
	}else{
		echo "<script> alert ('Login Inválido')</script>";
		echo "<script> location.href= ('index.php')</script>";
	}
?>