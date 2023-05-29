<?php

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
    
}