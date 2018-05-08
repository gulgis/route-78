<?php
include '../DAO/DaoFuncionario.php';

class Funcionario
{
    //private $codFuncionario;
    private $nome;
    private $sexo;
    private $cpf;
    private $registroGeral;
    private $telefone;
    private $email;
    private $login;
    private $senha;
    private $situacao;
    private $tipoFuncionario;

    public function __construct($nome, $sexo, $cpf, $registroGeral, $telefone, $email, $login, $senha, $situacao, $tipoFuncionario)
    {
        $this -> setNome($nome);
        $this -> setSexo($sexo);
        $this -> setCpf($cpf);
        $this -> setRegistroGeral($registroGeral);
        $this -> setTelefone($telefone);
        $this -> setEmail($email);
        $this -> setLogin($login);
        $this -> setSenha($senha);
        $this -> setSituacao($situacao);
        $this -> setTipoFuncionario($tipoFuncionario);
    }

    /**
     * @return mixed
     */
    public function getCodFuncionario()
    {
        return $this->codFuncionario;
    }

    /**
     * @param mixed $codFuncionario
     */
    public function setCodFuncionario($codFuncionario)
    {
        $this->codFuncionario = $codFuncionario;
    }

    /**
     * @return mixed
     */
    public function getTipoFuncionario()
    {
        return $this->tipoFuncionario;
    }

    /**
     * @param mixed $tipoFuncionario
     */
    public function setTipoFuncionario($tipoFuncionario)
    {
        $this->tipoFuncionario = $tipoFuncionario;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

    }

    /**
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getRegistroGeral()
    {
        return $this->registroGeral;
    }

    /**
     * @param mixed $registroGeral
     */
    public function setRegistroGeral($registroGeral)
    {
        $this->registroGeral = $registroGeral;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }



    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return mixed
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param mixed $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }





}