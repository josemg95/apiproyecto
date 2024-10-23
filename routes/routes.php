<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);

/* Este es el proceso cuando no se hace ninguna peticion a la API */
if(count($routesArray) == 0){

    $json = array(

        'status' => 404,
        'result' => 'Not fond'
    
    );
    echo json_encode($json, http_response_code($json["status"]));
    return;

}

/* Este es el proceso cuando si se hace una peticion a la API */
if(count($routesArray) == 1 && isset($_SERVER['REQUEST_METHOD'])){

    /* Petición GET */

    if($_SERVER['REQUEST_METHOD'] == "GET"){

        $json = array(

            'status' => 202,
            'result' => 'Solicitud GET'
        
        );
        echo json_encode($json, http_response_code($json["status"]));
        
    }

    /* Petición POST */

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        $json = array(

            'status' => 202,
            'result' => 'Solicitud POST'
        
        );
        echo json_encode($json, http_response_code($json["status"]));
        
    }

    /* Petición PUT */

    if($_SERVER['REQUEST_METHOD'] == "PUT"){
        
        $json = array(

            'status' => 202,
            'result' => 'Solicitud PUT'
        
        );
        echo json_encode($json, http_response_code($json["status"]));
        
    }

    /* Petición DELETE */

    if($_SERVER['REQUEST_METHOD'] == "DELETE"){
        
        $json = array(

            'status' => 202,
            'result' => 'Solicitud DELETE'
        
        );
        echo json_encode($json, http_response_code($json["status"]));
        
    }




}



