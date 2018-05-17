<?php
require_once("../model/classCliente.php");
//willian usou inclue"" no lugar de require_once;


class clienteController 
{

    
    
    
	private $cliente;

	public function __construct()
                {
            
                }
        
        
        
//Método responsável em "setar" os valores passados pelo formulário para a camada de modelo, através do métodos: setNome(), setIdade() e setTelefone(), sendo referenciado pelo objeto $this->cadastro criado anteriormente;
        public function incluirCliente($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco){
            
            
            $cliente = new Cliente ($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco);  
            return DaoCliente:: salvaCliente($cliente);
                		
	}
         public function excluirCliente($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco){
            
            
            $cliente = new Cliente ($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco);  
            return DaoCliente:: salvaCliente($cliente);
                		
	}	
         public function editarCliente($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco){
            
            
            $cliente = new Cliente ($nome, $codigo, $tipo, $cpf, $telefone, $email, $endereco);  
            return DaoCliente:: salvaCliente($cliente);
                		
	}	
}
new CadastroController();
?>