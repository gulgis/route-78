<?php

include "../model/classFuncionario.php";

class FuncionarioController
{
    public function __construct()
    {

    }


    public static function insereFuncionario($nome, $sexo, $cpf, $registroGeral, $telefone, $email, $login, $senha, $situacao, $tipoFuncionario){

        $funcionario = new Funcionario($nome, $sexo, $cpf, $registroGeral, $telefone, $email, $login, $senha, $situacao, $tipoFuncionario);

        return DaoFuncionario::salvaFuncionario($funcionario);
    }


}