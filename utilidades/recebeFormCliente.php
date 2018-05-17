<?php
include_once '../controller/FuncionarioController.php';
switch ($_POST['tipo']){
    case 'cadastrar':
        //$nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco
        $nome = $_POST['inputNome'];
        $codigo = $_POST['inputCodigo'];
        $tipoCliente= $_POST['selectTipo'];
        $cpf = $_POST['inputCPF'];
        $telefone = $_POST['inputTelefone'];
        $email = $_POST['inputEmail'];
        
        $endereco= $_POST['inputEndereco'];
        
       ClienteController::insereCliente($nome, $codigo, $tipoCliente, $cpf, $telefone, $email);
        break;
}