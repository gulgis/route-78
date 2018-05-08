<?php
	session_start();
	include "conexao.php";
	
	$cod_marca = $_POST ["codigo"];
	$nome_marca = $_POST ["nome_marca"];
	
	if (empty($nome_marca)){
		echo "<script> alert ('Marca em Branco') </script>";
		echo "<script> location.href =('marca.php') </script>";	
		exit;
	}

		$altera = mysql_query ("UPDATE marca SET nome_marca = '$nome_marca' WHERE cod_marca = '$cod_marca'");
		
		if ($altera == TRUE){
			echo "<script> alert ('Marca alterada com sucesso!') </script>";
			echo "<script> location.href = ('marca.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar atualizar os dados') </script>";
			echo "<script> location.href = ('marca.php') </script>";
			exit;
		}
?>