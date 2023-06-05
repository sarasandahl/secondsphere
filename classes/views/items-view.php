<?php

class ItemsView {
    public function renderAllItemsAsList(array $items):void {
        echo "<ul>";
        foreach($items as $item){
            echo "<a href='single-item.php?post=".$item['id']."'><li>{$item['product_name']}, {$item['brand']} {$item['type']}</li></a>";
        }
        echo "</ul>";
    }
}
