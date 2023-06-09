<?php

//renderar listan av varor med den informationen jag vill ha ut
class ItemsView {
    
    public function renderAllItemsAsList(array $items):void {
        foreach($items as $item){
            echo 
            "<a href='single-item.php?post=".$item['id']."'><br> 
            {$item['product_name']}<br> <img src=".$item['image']." alt='image' height='600px'><br> 
            {$item['brand']}<br> 
            {$item['type']}</a>";
        }
    }
}