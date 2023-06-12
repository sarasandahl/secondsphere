<?php

require_once __DIR__ . '/../db.php'; //fråga om __DIR__

class UsersModel extends DB {

    protected $table = "users";

    //hämtar allt i users-tabellen. Används i formuläret för en ny vara(item-form-php)
    public function getAllUsers(){
        return $this->getAll($this->table);
    }

    //hämtar en user på id, används och renderas i single-user.php BEHÖVER JAG EBNS DENNA NU?
    public function getUser(int $id) { //ta bort?  :array?
        $users = $this->getAll($this->table);
        $result = array_filter($users, fn($b) => intval($b['id']) == $id);
        return array_merge(...$result);
    }
    
    //lägg till en user i formulär, används till formuläret för ny säljare i user-form-handler
    public function addUser(string $firstName, string $lastName, string $email) {
        $query = "INSERT INTO {$this->table} (first_name,last_name,email) VALUES (?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$firstName, $lastName, $email]);
    }

    //sorterar användare alfabetiskt på efternamn, används i listan på users.php
    public function sortUserAlphabetically() {
        $query = "SELECT id,first_name,last_name FROM users ORDER BY last_name ASC";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
        
}
