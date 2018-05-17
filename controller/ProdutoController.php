<?php

include "../model/classProduto.php";

class ProdutoController
{
    public function __construct()
    {

    }


    public static function insereProduto($nome, $descricao, $estoque, $valor, $situacao){

        $Produto = new Produto ($nome, $descricao, $estoque, $valor, $situacao);

        return DaoProduto::salvaProduto($Produto);
    }
	
	public static function editaProduto($nome, $descricao, $estoque, $valor, $situacao){

        $Produto = new Produto ($nome, $descricao, $estoque, $valor, $situacao);

        return DaoProduto::alteraProduto($Produto);
    }
	
	public static function excluiProduto($nome){

        $Produto = new Produto ($nome);

        return DaoProduto::excluiProduto($Produto);
    }


}