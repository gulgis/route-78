<?php
/**
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	$servidor = "localhost";
	$banco = "route-78";
	$usuario = "root";
	$senha = "root";
	$link = @mysqli_connect($servidor, $usuario, $senha) or die ("Não foi possivel conectar ao Banco");
	$sql_banco = mysqli_select_db($link,$banco);
**/



class Conexao{

    public static $instanciaDoBD;
    private $nomeServidor = 'localhost';
    private $nomeBanco = 'route78';
    private $usuarioBanco = 'root';
    private $senhaBanco = 'root';
    private $dsn = 'mysql:host=localhost;dbname=route78';

    private function __construct()
    {

    }

    public static function getInstanciaDoBD()
    {
        if(!isset(self::$instanciaDoBD)){

            self::$instanciaDoBD = new PDO('mysql:host=localhost;dbname=route78', 'root', 'root');
            self::$instanciaDoBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instanciaDoBD->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instanciaDoBD;
    }

}