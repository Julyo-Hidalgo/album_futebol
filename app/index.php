<?php

include 'controller/pagina_controller.php';

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($url){
    case '/':
        pagina_controller::index(); 
    break;

    default:
        echo "erro 404";
    break;
}