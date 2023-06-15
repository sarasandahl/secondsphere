<?php

class DB {

    protected $pdo;

    public function __construct(PDO $pdo)
    { //gör så jag kan kalla på pdo nedåt via arv
        $this->pdo = $pdo;
    }
//hämtar alla tabeller i schemat, vilken sedan används i samtliga modeller
    public function getAll($table)
    {
        $query = "SELECT * FROM $table";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
