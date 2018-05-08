<?php
include_once '../controller/FuncionarioController.php';

switch ($_POST['tipo']){
    case 'cadastrar':
        $nome = $_POST['inputNome'];
        $sexo = $_POST['selectSexo'];
        $cpf = $_POST['inputCPF'];
        $registroGeral = $_POST['inputRG'];
        $telefone = $_POST['inputTelefone'];
        $email = $_POST['inputEmail'];
        $login = $_POST['inputLogin'];
        $senha = $_POST['inputPassword'];
        $situacao = $_POST['selectSituacao'];
        $tipoFuncionario = $_POST['selectTipo'];
        FuncionarioController::insereFuncionario($nome, $sexo, $cpf, $registroGeral, $telefone, $email, $login, $senha, $situacao, $tipoFuncionario);

        break;
}