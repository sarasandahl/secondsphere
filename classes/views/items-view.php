<?php

//renderar lista av alla varor med den informationen jag vill ha ut
class ItemsView {

    public function renderAllItemsAsList(array $items):void {

            foreach($items as $item){
                if ($item['sold'] == 0) { //Gör bara följande om varan finns i lager; sold har värdet 0
                    echo //skapar en post på id:et som tar dig till den varans sida. Hämtas via en get av single items (single-item.php)
                    "<a href='single-item.php?post=".$item['id']."'><br> 
                    {$item['product_name']}<br> <img src=".$item['image']." alt='image' height='600px'><br> 
                    {$item['brand']}<br> 
                    {$item['type']}</a>";
            }
        }
    }
}