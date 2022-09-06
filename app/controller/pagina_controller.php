<?php
class pagina_controller{
    static public function index(){
        include 'view/modules/pagina/pagina.php';
    }

    static public function trocar_cartas(){
        include 'model/pagina_model.php';
        
    }
}