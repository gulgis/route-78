<?php
	session_start();
	include "conexao.php";
	
	$nome_marca = $_POST ["nome_marca"];
	
	
	if (empty($nome_marca)){
		echo "<script> alert ('Marca em Branco') </script>";
		echo "<script> location.href =('cadastra_marca.php') </script>";	
		exit;
	}
	
	$consulta = mysql_query("SELECT * FROM marca WHERE nome_marca='$nome_marca'");
	
	$resultado = mysql_num_rows($consulta);
	
	if ($resultado == TRUE){
		echo "<script> alert ('Essa marca j? foi cadastrado.') </script>";
		echo "<script> location.href =('cadastra_marca.php') </script>";
		exit;
	}else{
	
		$insere = mysql_query ("INSERT INTO marca (nome_marca) VALUES ('$nome_marca')");
		
		if ($insere == TRUE){
			echo "<script> alert ('Marca cadastrada com sucesso!') </script>";
			echo "<script> location.href = ('marca.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar atualizar os dados') </script>";
			echo "<script> location.href = ('marca.php') </script>";
			exit;
		}
	}
?>