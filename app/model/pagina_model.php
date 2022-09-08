<?php
class pagina_model{
    public $id, $link;

    public function trocar_carta(){
    	include 'dao/pagina_dao.php';

        $dao = new pagina_dao();
        $this->rows = $dao->troca_carta();
    }
}