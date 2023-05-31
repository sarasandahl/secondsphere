<?php

require_once __DIR__ . '/../db.php'; //fråga om __DIR__

class UsersModel extends DB {

    protected $table = "users";

    public function getAllUsers(){
        return $this->getAll($this->table);
    }

    public function getUser($id) {
        $users = $this->getAll($this->table);
        $result = array_filter($users, fn($b) => intval($b['id']) == $id);
        return array_merge(...$result);
    }
    
    public function addUser(string $firstName, string $lastName, string $email) {
        $query = "INSERT INTO {$this->table} (first_name,last_name,email) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$firstName, $lastName, $email]);
    }
    
}