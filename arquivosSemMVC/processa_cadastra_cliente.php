<?php
	session_start();
	include "conexao.php";	
	
	$nome_cli = $_POST ["nome"];
	$cpf_cli = $_POST ["cpf"];
	$end_cli = $_POST ["end"];
	$tel_cli = $_POST ["tel"];
	
	
	if (empty($nome_cli)){
		echo "<script> alert ('Nome em Branco') </script>";
		echo "<script> location.href =('cadastra_cliente.php') </script>";	
		exit;
	}
	if (empty($end_cli)){
		echo "<script> alert ('Endereço em Branco') </script>";
		echo "<script> location.href =('cadastra_cliente.php') </script>";	
		exit;
	}	
	
	$consulta = mysql_query("SELECT * FROM cliente WHERE cpf_cli='$cpf_cli'");
	
	$resultado = mysql_num_rows($consulta);
	
	if ($resultado == TRUE){
		echo "<script> alert ('Essa CPF ja foi cadastrado.') </script>";
		echo "<script> location.href =('cadastra_cliente.php') </script>";
		exit;
	}else{
	
		$insere = mysql_query ("INSERT INTO cliente (nome_cli,cpf_cli,end_cli,tel_cli) VALUES ('$nome_cli','$cpf_cli','$end_cli','$tel_cli')");
		
		if ($insere == TRUE){
			echo "<script> alert ('Cliente cadastrado com sucesso!') </script>";
			echo "<script> location.href = ('cliente.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar cadastrar os dados') </script>";
			echo "<script> location.href = ('cliente.php') </script>";
			exit;
		}
	}
?>