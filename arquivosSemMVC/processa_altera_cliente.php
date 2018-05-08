<?php
	session_start();
	include "conexao.php";
	
	$cod_cli = $_POST ["codigo"];
	$nome_cli = $_POST ["nome"];
	$cpf_cli = $_POST ["cpf"];
	$tel_cli = $_POST ["tel"];
	$end_cli = $_POST ["end"];
	
	if (empty($nome_cli)){
		echo "<script> alert ('Nome em Branco') </script>";
		echo "<script> location.href =('cliente.php') </script>";	
		exit;
	}
	if (empty($end_cli)){
		echo "<script> alert ('Endereço em Branco') </script>";
		echo "<script> location.href =('cliente.php') </script>";	
		exit;
	}

	
	$altera = mysql_query("UPDATE cliente SET nome_cli = '$nome_cli', cpf_cli = '$cpf_cli',tel_cli = '$tel_cli',end_cli = '$end_cli' WHERE cod_cli = '$cod_cli'");
		
		if ($altera == TRUE){
			echo "<script> alert ('Cliente alterado com sucesso!') </script>";
			echo "<script> location.href = ('cliente.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar atualizar os dados') </script>";
			echo "<script> location.href = ('cliente.php') </script>";
			exit;
		}
?>