<?php
require_once '../config.php';

class Conexao{

    public static $instanciaDoBD;

    private function __construct()
    {

    }

    public static function getInstanciaDoBD()
    {
        if(!isset(self::$instanciaDoBD)){

            self::$instanciaDoBD = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
            self::$instanciaDoBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$instanciaDoBD->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
        }

        return self::$instanciaDoBD;
    }

}

