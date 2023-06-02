<?php

require_once __DIR__ . '/../db.php';

class ConditionsModel extends DB {

    protected $table = "conditions";

    //hämtar allt i condiditions-tabellen. Används i formuläret för en ny vara(item-form-php)
    public function getAllConditions() { 
        return $this->getAll($this->table);
    }
}