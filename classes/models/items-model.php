<?php

require_once __DIR__ . '/../db.php';

class ItemsModel extends DB {

    protected $table = "items";

    public function getAllItems() {
        return $this->getAll($this->table);
    }
        //ska den vara häR? eller gör man en ny sql-fråga i db?
        //ta bort?
    public function getItem($id) {
        $items = $this->getAll($this->table);
        $result = array_filter($items, fn($b) => intval($b['id']) == $id);
        return array_merge(...$result);
    }

    public function getAllItemsWithUsersAndConditions () {
        $query = "SELECT * FROM users JOIN items ON users.id=items.userId JOIN conditions ON conditions.id=items.conditionId";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function addItem(int $userId, string $productName, string $brand, string $type, string $description, string $size, int $price, int $conditionId) {
        $query = "INSERT INTO {$this->table} (userId,product_name,brand,type,description,size,price,conditionId) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$userId, $productName, $brand, $type, $description, $size, $price, $conditionId]);
    }
}