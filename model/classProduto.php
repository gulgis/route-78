<?php
include '../DAO/DaoProduto.php';

class Produto
{
    //private $codProduto;
    private $nome;
    private $descricao;
    private $estoque;
    private $valor;
    private $situacao;
    
    public function __construct($nome, $descricao, $estoque, $valor, $situacao)
    {
        $this -> setNome($nome);
        $this -> setDescricao($descricao);
        $this -> setEstoque($estoque);
        $this -> setValor($valor);
        $this -> setSituacao($situacao);

	}

    /**
     * @return the nome
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * @param nome the nome to set
     */
    public function setNome($nome) {
        $this->nome = $nome;
    }

    /**
     * @return the descricao
     */
    public function getDescricao() {
        return $this->descricao;
    }

    /**
     * @param descricao the descricao to set
     */
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    /**
     * @return the estoque
     */
    public function getEstoque() {
        return $this->estoque;
    }

    /**
     * @param estoque the estoque to set
     */
    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    /**
     * @return the valor
     */
    public function getValor() {
        return $this->valor;
    }

    /**
     * @param valor the valor to set
     */
    public function setValor($valor) {
        $this->valor = $valor;
    }

    /**
     * @return the situacao
     */
    public function getSituacao() {
        return $this->situacao;
    }

    /**
     * @param situacao the situacao to set
     */
    public function setSituacao($situacao) {
        $this->situacao = $situacao;
    }



}