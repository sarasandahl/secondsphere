<?php

class ItemsModel extends DB {

    protected $table = "items";

    public function getAllItems(){
        return $this->getAll($this->table);
    }
}