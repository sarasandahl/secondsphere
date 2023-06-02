<?php

require_once __DIR__ . '/../db.php';

class ItemsModel extends DB {

    protected $table = "items";

    //hämtar allt i items-tabellen. Används items.php
    public function getAllItems() {
        return $this->getAll($this->table);
    }
    
    //ta bort? Gör den här något ens nu? Undersök.
    public function getItem(int $id) {
        $items = $this->getAll($this->table);
        $result = array_filter($items, fn($item) => intval($item['id']) == $id);
        return array_merge(...$result);
    }

    //Används för single-item sidan. visar en vara med mer tillhärande data från tabellerna users och quality. renderas i single-item-view
    public function getOneItemWithUsersAndConditions(int $id) {
        //$query = "SELECT * FROM users JOIN items ON users.id=items.userId JOIN conditions ON conditions.id=items.conditionId";
        $query = "SELECT items.id, items.product_name, items.brand, items.description, items.size, items.price, conditions.quality, conditions.description, users.first_name, users.last_name FROM users JOIN items ON users.id=items.userId JOIN conditions ON conditions.id=items.conditionId";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $items = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result = array_filter($items, fn($item) => intval($item['id']) == $id);
        return array_merge(...$result);
    }
    
    //Lägger till en vara med säljare från users-tabell och skick från conditions-tabell. Används i item-form-handler.php
    public function addItem(int $userId, string $productName, string $brand, string $type, string $description, string $size, int $price, int $conditionId) {
        $query = "INSERT INTO {$this->table} (userId,product_name,brand,type,description,size,price,conditionId) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$userId, $productName, $brand, $type, $description, $size, $price, $conditionId]);
    }
}