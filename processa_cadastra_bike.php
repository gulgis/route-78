<?php
	session_start();
	include "conexao.php";
	
	$cod_bike = $_POST ["codigo"];
	$aro_bike = $_POST["aro"];
	$ativo_bike = $_POST["ativo"];
	$cor_bike = $_POST["cor"];
	$marcha_bike = $_POST["marcha"];
	$modalidade_bike = $_POST["modalidade"];
	$modelo_bike = $_POST["modelo"];
	$preco_bike = $_POST["preco"];
	$suspensao_bike = $_POST["suspensao"];
	$cod_marca = $_POST["marca"];	
	
	if (empty($modelo_bike)){
		echo "<script> alert ('Modelo em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";	
		exit;
	}if (empty($suspensao_bike)){
		echo "<script> alert ('Suspensao em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}if (empty($cor_bike)){
		echo "<script> alert ('Cor em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}if (empty($marcha_bike)){
		echo "<script> alert ('Marcha em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}if (empty($modalidade_bike)){
		echo "<script> alert ('Modalidade em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}if (empty($preco_bike)){
		echo "<script> alert ('Preço em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}if (empty($aro_bike)){
		echo "<script> alert ('Aro em Branco') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}
	if ($ativo_bike == 'sim'){
		$ativo = 1;		
	}if ($ativo_bike == 'nao'){
		$ativo = 0;		
	}if($ativo_bike == 'sel'){
		echo "<script> alert ('Ativo Inválido') </script>";
		echo "<script> location.href =('bike.php') </script>";
	}
	if($cod_marca == 'sel'){
		echo "<script> alert ('Marca Inválida') </script>";
		echo "<script> location.href =('bike.php') </script>";
	}
	$consulta = mysql_query("SELECT * FROM bikes WHERE modelo_bike='$modelo_bike'");
	
	$resultado = mysql_num_rows($consulta);
	
	if ($resultado == TRUE){
		echo "<script> alert ('Esse modelo já foi cadastrado.') </script>";
		echo "<script> location.href =('cadastra_bike.php') </script>";
		exit;
	}else{
	
		$insere = mysql_query ("INSERT INTO bikes (modelo_bike,suspensao_bike,cor_bike,marcha_bike,modalidade_bike,preco_bike,aro_bike,ativo_bike,marca_cod_marca) VALUES ('$modelo_bike','$suspensao_bike','$cor_bike','$marcha_bike','$modalidade_bike','$preco_bike','$aro_bike','$ativo','$cod_marca')");
		
		if ($insere == TRUE){
			echo "<script> alert ('Bike cadastrada com sucesso!') </script>";
			echo "<script> location.href = ('bike.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar atualizar os dados') </script>";
			echo "<script> location.href = ('bike.php') </script>";
			exit;
		}
	}
?>