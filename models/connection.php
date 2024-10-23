<?php
class Connection{

    /* Información de la base de datos */

    static public function infoBD(){

        $infoDB = array(

            "database" => "apirest_project",
            "user" => "root",
            "pass" => ""

        );

        return $infoDB;
    }

    /* Conexión a la base de datos */

    static public function connect(){
        
        try{

            $link = new PDO (
                
                "mysql:host=localhost;dbname=".Connection::infoBD()['database'],
                Connection::infoBD()['user'],
                Connection::infoBD()['pass']
            
            
            );
            $link->exec("set names utf8");
        }catch(PDOExeption $e){

            die("Error: ".$e->getMessage());
        }

        return $link;
    }
}