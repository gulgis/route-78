<?php



session_start();
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
            <div class="card-header">Registro de Produto</div>


            <div class="card-body">
                <form action="utilidades/recebeFormProduto.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="inputNome">Nome</label>
                                <input class="form-control" name="inputNome" id="inputNome" type="text" />
                            </div>
							<div class="col-md-6">
                                <label for="inputLogin">Estoque</label>
                                <input class="form-control" name="inputEstoque" id="inputEstoque" type="text"/>
                            </div>
							<div class="col-md-6">
                                <label for="inputLogin">Valor</label>
                                <input class="form-control" name="inputValor" id="inputValor" type="number"/>
                            </div>
							<div class="col-md-6">
                                <label for="inputLogin">Descrição</label>
                                <textarea class="form-control" name="inputDescricao" id="inputDescricao" type="text" maxlength="500"></textarea>
                            </div>
							<div class="col-md-3">
                                <label for="selectSexo">Situação</label>
                                <select class="form-control" name="selectSituacao" id="selectSituacao">
                                    <option>Ativo</option>
                                    <option>Inativo</option>
                                </select>
                            </div>
                        </div>
					</div>
                    
                    <input type="hidden" name="tipo" value="cadastrar"/>
                    <button class="btn btn-primary btn-block" type="submit">Cadastrar</button>
                </form>
            </div>
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