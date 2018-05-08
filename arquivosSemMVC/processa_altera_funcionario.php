<?php

	include "conexao.php";
	
	$cod_fun = $_POST ["codigo"];
	$acesso_fun = $_POST ["acesso"];
	$ativo_fun = $_POST ["ativo"];
	$nome_fun = $_POST ["nome"];
	$cpf_fun =$_POST ["cpf"];
	$end_fun = $_POST ["end"];
	$tel_fun = $_POST ["tel"];
	$login_fun = $_POST ["login"];
	$senha_fun = $_POST ["senha"];	
	
	if (empty($nome_fun)){
		echo "<script> alert ('Nome em Branco') </script>";
		echo "<script> location.href =('funcionario.php') </script>";	
		exit;
	}
	if (empty($login_fun)){
		echo "<script> alert ('Login em Branco') </script>";
		echo "<script> location.href =('funcionario.php') </script>";	
		exit;
	}
	if (empty($senha_fun)){
		echo "<script> alert ('Senha em Branco') </script>";
		echo "<script> location.href =('funcionario.php') </script>";	
		exit;
	}
	if (empty($cpf_fun)){
		echo "<script> alert ('CPF em Branco') </script>";
		echo "<script> location.href =('funcionario.php') </script>";	
		exit;
	}
	if (empty($end_fun)){
		echo "<script> alert ('Endereço em Branco') </script>";
		echo "<script> location.href =('funcionario.php') </script>";	
		exit;
	}
	if (empty($tel_fun)){
		echo "<script> alert ('Telefone em Branco') </script>";
		echo "<script> location.href =('funcionario.php') </script>";
		exit;
	}
	if ($acesso_fun == 'adm'){
		$acesso = 1;		
	}if ($acesso_fun == 'fun'){
		$acesso = 0;		
	}if($acesso_fun == 'sel'){
		echo "<script> alert ('Acesso Inválido') </script>";
		echo "<script> location.href =('funcionario.php') </script>";
	}
	if ($ativo_fun == 'sim'){
		$ativo = 1;		
	}if ($ativo_fun == 'nao'){
		$ativo = 0;		
	}if($ativo_fun == 'sel'){
		echo "<script> alert ('Ativo Inválido') </script>";
		echo "<script> location.href =('funcionario.php') </script>";
	}
	
		$altera = mysql_query ("UPDATE funcionario SET nome_fun = '$nome_fun',cpf_fun = '$cpf_fun', end_fun = '$end_fun', login_fun = '$login_fun', senha_fun = '$senha_fun', tel_fun = '$tel_fun', acesso_fun = '$acesso', ativo_fun = '$ativo' WHERE cod_fun = '$cod_fun'");
		
		if ($altera == TRUE){
			echo "<script> alert ('Funcionario alterada com sucesso!') </script>";
			echo "<script> location.href = ('funcionario.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar atualizar os dados') </script>";
			echo "<script> location.href = ('funcionario.php') </script>";
			exit;
		}
	
?>