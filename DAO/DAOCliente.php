<?php
require_once "../conexao.php";
require_once "../utilidades/conexao.php";
 
 
 class DaoCliente{
     
     public static $instancia;
     
     public function _construct()
     {}
       public static function salvaCliente(cliente $cliente){
        try{
            $sql = "INSERT INTO cliente(
              nome_cliente,
              tipo_cliente,
              cpf_cliente,
              telefone_cliente,
              email_cliente,
              endereco_cliente,
              )
              VALUES 
              (
              :nome,
              :tipoCliente,
              :cpf,
              :telefone,
              :email,
              :endereco)";
            $p_sql = Conexao::getInstanciaDoBD()->prepare($sql);
            $p_sql->bindValue(':nome', $cliente->getNome());
            $p_sql->bindValue(':tipoCliente', $cliente->getTipoCliente());
            $p_sql->bindValue(':cpf', $cliente->getCpf());
            $p_sql->bindValue(':telefone', $cliente->getTelefone());
            $p_sql->bindValue(':email', $cliente->getEmail());
            $p_sql->bindValue(':endereco', $cliente->getEndereco());
            
            return $p_sql->execute();
        } catch (exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde!";
            print $e->getMessage();
        }
    }
}      
     
     
 