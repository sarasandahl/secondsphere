<?php

class ItemView {

    public function renderAllItemsAsList(array $items):void {
        echo "<ul>";
        foreach($items as $item){
            echo "<li>{$item['product_name']} {$item['brand']} {$item['type']}</li>";
        }
        echo "</ul>";
    }
}
