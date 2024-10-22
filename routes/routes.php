<?php

$routesArray = explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
//echo '<pre>'; print_r($routesArray); echo '</pre>';

if(count($routesArray) == 0){

    $json = array(

        'status' => 404,
        'result' => 'Not fond'
    
    );
    echo json_encode($json, http_response_code($json["status"]));
    return;

}


