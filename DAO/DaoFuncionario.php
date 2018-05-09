<?php
require_once "../utilidades/conexao.php";


class DaoFuncionario
{
    public static $instancia;

    public function __construct()
    {

    }

    public static function salvaFuncionario(Funcionario $funcionario){
        try{
            $sql = "INSERT INTO funcionario(
              nome_funcionario,
              sexo_funcionario,
              cpf_funcionario,
              rg_funcionario,
              telefone_funcionario,
              email_funcionario,
              login_funcionario,
              senha_funcionario,
              situacao_funcionario,
              tipo_funcionario)
              VALUES (
              :nome,
              :sexo,
              :cpf,
              :registroGeral,
              :telefone,
              :email,
              :login,
              :senha,
              :situacao,
              :tipoFuncionario)";

            $p_sql = Conexao::getInstanciaDoBD()->prepare($sql);

            $p_sql->bindValue(':nome', $funcionario->getNome());
            $p_sql->bindValue(':sexo', $funcionario->getSexo());
            $p_sql->bindValue(':cpf', $funcionario->getCpf());
            $p_sql->bindValue(':registroGeral', $funcionario->getRegistroGeral());
            $p_sql->bindValue(':telefone', $funcionario->getTelefone());
            $p_sql->bindValue(':email', $funcionario->getEmail());
            $p_sql->bindValue(':login', $funcionario->getLogin());
            $p_sql->bindValue(':senha', $funcionario->getSenha());
            $p_sql->bindValue(':situacao', $funcionario->getSituacao());
            $p_sql->bindValue(':tipoFuncionario', $funcionario->getTipoFuncionario());


            return $p_sql->execute();
        } catch (exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde!";
            print $e->getMessage();
        }
    }

}