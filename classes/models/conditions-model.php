<?php

require_once __DIR__ . '/../db.php';

class ConditionsModel extends DB {

    protected $table = "conditions";

    public function getAllConditions() {
        return $this->getAll($this->table);
    }
}