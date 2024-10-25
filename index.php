<?php

ini_set('display_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", "C:/xampp\htdocs/apiproyecto/error_log");


//Requerimiento de la ruta princupal

require_once "controllers/routes.controller.php";

$index = new RoutesController();
$index -> index();
