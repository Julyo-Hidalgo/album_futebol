<?php

class pagina_dao{

    private $conexao;

    public function __construct(){
        $dns = "mysql:host=localhost:3306;dbname=mydb";
        $this->conexao = new PDO($dns, 'root', 'minhasenha');
    }

    public function troca_carta_pelo_id(int $id){
        $sql = "select * from pagina where id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute;

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}