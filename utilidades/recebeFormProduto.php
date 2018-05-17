<?php
include_once '../controller/ProdutoController.php';

switch ($_POST['tipo']){
    case 'cadastrar':
        $nome = $_POST['inputNome'];
        $descricao = $_POST['inputDescricao'];//Insere uma descrição para o produto
        $estoque = $_POST['inputEstoque'];
        $valor = $_POST['inputValor'];
        $situacao = $_POST['selectSituacao'];//Seleciona a situação do produto
        
        ProdutoController::insereProduto($nome, $descricao, $estoque, $valor, $situacao);

        break;
	
	case 'alterar':
        $nome = $_POST['inputNome'];
        $descricao = $_POST['inputDescricao'];//Insere uma descrição para o produto
        $estoque = $_POST['inputEstoque'];
        $valor = $_POST['inputValor'];
        $situacao = $_POST['selectSituacao'];//Seleciona a situação do produto
        
        ProdutoController::alteraProduto($nome, $descricao, $estoque, $valor, $situacao);

		break;
	
	case 'excluir':
        $nome = $_POST['inputNome'];
        
        ProdutoController::excluiProduto($nome);

	break;
}