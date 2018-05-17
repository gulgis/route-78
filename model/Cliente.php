<?php

class Cliente {
  private $nome;
  private $codigo;
  protected $tipo;
  private $cpf;
  private $telefone;
  protected $email;
  private $endereco;

  
  #             Metodos Especiais.
  function __construct($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco) {
      $this ->setNome($nome);
      $this ->setCodigo($codigo);
      $this ->setTipo($tipo);
      $this ->setCpf($cpf);
      $this ->setTelefone($telefone);
      $this ->setEmail($email);
      $this ->setEndereco($endereco);
  }
  
  function getNome() {
      return $this->nome;
  }

  function getCodigo() {
      return $this->codigo;
  }

  function getTipo() {
      return $this->tipo;
  }

  function getCpf() {
      return $this->cpf;
  }

  function getTelefone() {
      return $this->telefone;
  }

  function getEmail() {
      return $this->email;
  }

  function getEndereco() {
      return $this->endereco;
  }

  function setNome($nome) {
      $this->nome = $nome;
  }

  function setCodigo($codigo) {
      $this->codigo = $codigo;
  }

  function setTipo($tipo) {
      $this->tipo = $tipo;
  }

  function setCpf($cpf) {
      $this->cpf = $cpf;
  }

  function setTelefone($telefone) {
      $this->telefone = $telefone;
  }

  function setEmail($email) {
      $this->email = $email;
  }

  function setEndereco($endereco) {
      $this->endereco = $endereco;
  }





}
