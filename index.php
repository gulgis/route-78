<?
	session_start();
	include "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Página de acesso</title>


    <!-- Ultima versão do minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">




    <script language="javascript" type="text/javascript">
        function validar(){
            var login = form_login.login.value;
            var senha = form_login.senha.value;
            if (login == ""){
                alert ("Login em Branco");
                form_login.nome.focus();
                return false;
            }
            if (senha == ""){
                alert ("Senha em Branco");
                form_login.senha.focus();
                return false;
            }
        }
    </script>
</head>


<body class="fixed-nav sticky-footer" id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav"role="navigation">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="imagens/logo.png" width="105" height="108" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Produtos</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>



    <div class="content-wrapper">
        <div class="content-fluid">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Login</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Login</label>
                            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Digite seu login">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> Remember Password</label>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-block" href="index.html">Entrar</a>
                    </form>
                    <div class="text-center">

                        <a class="d-block small" href="forgot-password.html">Esqueceu a senha?</a>
                    </div>
                </div>
            </div>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © route-78 Website 2018</small>
                    </div>
                </div>
            </footer>

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
