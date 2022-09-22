<?php
class pagina_model{
    public $id = 1;
    public $link;

    public function trocar_carta(int $id){
    	include 'dao/pagina_dao.php';
        $dao = new pagina_dao();
        $this->rows = $dao->troca_carta_pelo_id($id);
    }
}