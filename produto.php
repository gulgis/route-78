<?php

session_start();
//include "utilidades/conexao.php"
//$idUser = $_SESSION['id_usuario'];

?>
<html>
	<head>
		<title>route-78 - Produto</title>
		<link href="estilos/style.css"rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Ultima versão do minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>


    <body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Lista de Produtos</div>
		
		<?php
			/*este é o código que le cada linha para ver se há mais registos*/
			$pesquisa = mysqli_query($instanciaDoBD, "SELECT * FROM produto");
			$row = mysqli_fetch_assoc($instanciaDoBD, $pesquisa); //A função mysqli_fetch_assoc () busca uma linha de resultado como uma matriz associativa.	
			if(!$row){
				echo "Sem Resultados.";
			}else{
				print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
				print "<table class='table table-bordered table-striped table-hover'>";
				print "<tr>";
				print "<th>Codigo</th>";
				print "<th>Nome</th>";
				print "<th>Descricao</th>";
				print "<th>Estoque</th>";
				print "<th>Valor</th>";
				print "<th>Situacao</th>";
				print "</tr>";
				while($row = mysqli_fetch_assoc($pesquisa)){	
					print "<tr>";
					print "<td>".$row["codigo_produto"]."</td>";
					print "<td>".$row["nome_produto"]."</td>";
					print "<td>".$row["descricao_produto"]."</td>";
					print "<td>".$row["estoque_produto"]."</td>";
					print "<td>".$row["valor_produto"]."</td>";
					print "<td>".$row["situacao_produto"]."</td>";
					print "<td>
						
						<button class='btn btn-success' onclick=\"location.href='index.php?page=altera_produto&codigo_produto=".$row["codigo_produto"]."';\"><i class='fa fa-edit'></i></button>
						
						<button class='btn btn-danger' onclick=\"location.href='index.php?page=DaoProduto&acao=excluirProduto&cod_bike=".$row["codigo_produto"]."';\"><i class='fa fa-trash'></i></button>
						
					   </td>";
				print "</tr>";
			}
			print "</table>";
		}
		
		?>

            
        </div>
    </div>



		<div id="rodape2">
			<h4>ROUTE 78 - Proibida a reprodução total ou parcial do conteúdo desta página sem autorização prévia. </h4>
		</div>
	</div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- última compilação do JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	</body>
</html>
