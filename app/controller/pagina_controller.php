<?php
class pagina_controller{
    static public function index(){
        include "model/pagina_model.php";

        $model = new pagina_model();

        $model->trocar_carta($model->id);
        
        include 'view/modules/pagina/pagina.php';
    }

    static public function trocar_cartas(){
        include 'model/pagina_model.php';
        
        $model = new pagina_model();

        $model->id = $_POST['valor_btn'];

        $model->trocar_carta($model->id);

        include "view/modules/pagina/pagina.php";
    }
}