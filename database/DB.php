<?php

abstract class DB {
	
    //Create the constants for the connection
    const USER = "u961989317_ger";
    const PASS = "KScgoWZ3da3m";

    //Create a static attribute set to null
    private static $instance = null;

    private static function conectar() {

        try {
            if(self::$instance == null) {
		        $dsn = "mysql:host=mysql.hostinger.com.br;dbname=u961989317_ger";
		        self::$instance = new PDO($dsn, self::USER, self::PASS);
		        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
	    } catch(PDOException $e) {
            echo "Erro: " . $e->getMessage();
	    }

        //Return the instance with value
        return self::$instance;
    }

    protected static function getDB() {
        //Return the connection
	    return self::conectar();
    }
}