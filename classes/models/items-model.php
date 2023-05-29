<?php

class ItemsModel extends DB {

    protected $table = "items";

    public function getAllItems(){
        return $this->getAll($this->table);
    }

        //ska den vara häR? eller gör man en ny sql-fråga i db?
    public function getItem($id) {
        $items = $this->getAll($this->table);
        $result = array_filter($items, fn($b) => intval($b['id']) == $id);
        return array_merge(...$result);
    }
    
}