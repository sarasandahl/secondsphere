<?php

class ItemModel extends DB {

    protected $table = "items";

    public function getAllItems(){
        return $this->getAll($this->table);
    }
}