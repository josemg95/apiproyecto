<?php

require_once"connection.php";

class GetModel{

    static public function getData($table){

        $sql = "SELECT * FROM $table";

        $stmt = connection::connect() -> prepare($sql); //sentencia de  tipo statement
        $stmt-> execute();
        return $stmt -> fetchAll(PDO::FETCH_CLASS);   
    }
}
