<?php

class SingleItemView {

    public function renderSingleItem($item):void {
        echo "<p>
            {$item['product_name']}, 
            Märke: {$item['brand']}, 
            Beskrivning: {$item['description']}, 
            Storlek: {$item['size']}, 
            Pris: {$item['price']} kr,
            Skick:
            </p>";
    }
}
