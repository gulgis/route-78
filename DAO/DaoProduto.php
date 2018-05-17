<?php
require_once "../utilidades/conexao.php";

// classe DAO de Podutos
class DaoProduto
{
    public static $instancia;

    public function __construct()
    {

    }
	// Comando que irá salvar os dados dentro da tabela PRODUTO no banco de dados.
    public static function salvaProduto(Produto $produto){
        try{
			//Comando Sql para inserção de dados
            $sql = "INSERT INTO produto(
              nome_produto,
              descricao_produto,
              estoque_produto,
              valor_produto,
              situacao_produto)
              VALUES (
              :nome,
              :descricao,
              :estoque,
              :valor,
              :situacao)";

            $p_sql = Conexao::getInstanciaDoBD()->prepare($sql);

            $p_sql->bindValue(':nome', $produto->getNome());
            $p_sql->bindValue(':descricao', $produto->getDescricao());
            $p_sql->bindValue(':estoque', $produto->getEstoque());
            $p_sql->bindValue(':valor', $produto->getValor());
            $p_sql->bindValue(':situacao', $produto->getSituacao());
            

            return $p_sql->execute();
        } catch (exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde!";
            print $e->getMessage();
        }
    }
	
	
	   public static function alteraProduto(Produto $produto){
        try{
			//Comando Sql para inserção de dados
            $sql = "UPDATE produto SET
					  nome_produto=':nome',
					  descricao_produto=':descricao',
					  estoque_produto=':estoque',
					  valor_produto=':valor',
					  situacao_produto=':situacao'
					WHERE
					  codigo_produto=".$_REQUEST["codigo_produto"];

            $p_sql = Conexao::getInstanciaDoBD()->prepare($sql);

            $p_sql->bindValue(':nome', $produto->getNome());
            $p_sql->bindValue(':descricao', $produto->getDescricao());
            $p_sql->bindValue(':estoque', $produto->getEstoque());
            $p_sql->bindValue(':valor', $produto->getValor());
            $p_sql->bindValue(':situacao', $produto->getSituacao());
            
		/*
            return $p_sql->execute();
        } catch (exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde!";
            print $e->getMessage();
        }*/
		if ($sql == TRUE){
			echo "<script> alert ('Produto alterado com sucesso!') </script>";
			echo "<script> location.href = ('produto.php') </script>";
			exit;
		}else{
			echo "<script> alert ('Erro no servidor ao tentar atualizar os dados') </script>";
			echo "<script> location.href = ('produto.php') </script>";
			exit;
		}
		
    }
	
	
	// Comando que irá EXCLUIR os dados dentro da tabela PRODUTO no banco de dados.
    public static function excluiProduto(Produto $produto){
        try{
			//Comando Sql para EXCLUIR os dados onde o Campo é igual a codigo do produto
            $sql = "DELETE FROM produto
					WHERE codigo_produto=':nome'";				

            $p_sql = Conexao::getInstanciaDoBD()->prepare($sql);

            $p_sql->bindValue(':nome', $produto->getNome());
            
			/*
			if($result==true){
				print "<div class='alert alert-success'>Excluiu com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível excluir</div>"; 
			}
			*/
            return $p_sql->execute();
        } catch (exception $e){
            print "Ocorreu um erro ao tentar executar esta ação, tente novamente mais tarde!";
            print $e->getMessage();
        }

}