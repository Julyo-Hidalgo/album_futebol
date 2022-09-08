<?php

class pagina_dao{

    private $conexao;

    public function __construct(){
        $dns = "mysql:host=localhost:3307;dbname=mydb";
        $this->conexao = new PDO($dns, 'root', 'etecjau');
    }

    public function troca_carta(){
        $sql = "select * from pessoa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute;

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}