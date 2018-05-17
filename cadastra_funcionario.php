<?php



session_start();
//$idUser = $_SESSION['id_usuario'];

?>
<html>
	<head>
		<title>route-78 - Funcionário</title>
		<link href="estilos/style.css"rel="stylesheet" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Ultima versão do minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	</head>






    <body class="bg-dark">
    <div class="container">
        <div class="card card-register mx-auto mt-5">
            <div class="card-header">Registro de Fucionário</div>


            <div class="card-body">
                <form action="utilidades/recebeFormFuncionario.php" method="POST">
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="inputNome">Nome</label>
                                <input class="form-control" name="inputNome" id="inputNome" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label for="inputLogin">Login</label>
                                <input class="form-control" name="inputLogin" id="inputLogin" type="text"/>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="inputEmail1">Email address</label>
                        <input class="form-control" name="inputEmail" id="inputEmail" type="email"  placeholder="fulano@email.com"/>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="inputPassword">Senha</label>
                                <input class="form-control" name="inputPassword" id="inputPassword" type="password" />
                            </div>
                            <div class="col-md-6">
                                <label for="confirmPassword">Confirm password</label>
                                <input class="form-control" name="confirmPassword" id="confirmPassword" type="password" placeholder="Digite novamente"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="inputCPF">CPF</label>
                                <input class="form-control" name="inputCPF" id="inputCPF" type="text" />
                            </div>
                            <div class="col-md-6">
                                <label for="inputRG">RG</label>
                                <input class="form-control" name="inputRG" id="inputRG" type="text" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="form-row">
                            <div class="col-md-3">
                                <label for="inputTelefone">Telefone</label>
                                <input class="form-control" name="inputTelefone" id="inputTelefone" type="text" />
                            </div>
                            <div class="col-md-3">
                                <label for="selectSituacao">Situação</label>
                                <select class="form-control" name="selectSituacao"  id="selectSituacao">
                                    <option>Ativo</option>
                                    <option>Inativo</option>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="selectSexo">Sexo</label>
                                <select class="form-control" name="selectSexo" id="selectSexo">
                                    <option>Masculino</option>
                                    <option>Feminino</option>
                                    <option>Outro</option>

                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="selectTipo">Tipo de Funcionário</label>
                                <select class="form-control" name="selectTipo" id="selectTipo">
                                    <option>Gerente</option>
                                    <option>Atendente</option>
                                    <option>Supervisor</option>

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