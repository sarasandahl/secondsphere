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
            </p>"; //skick ska kopplas på med skick-tabellen och dynamiskt skriva ut skick utifrån valt skick i formuläret
    }
}
