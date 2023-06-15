<?php

//renderar en vara genom get i roten. Skriver ut den information jag vill åt med tillhörande information om säljare samt varans kvalité med infotext via hover-effekt
class SingleItemView {

    public function renderSingleItem(array $item):void {
        echo "<p> 
            <img src='{$item['image']}' alt='image' style='float:left;height='600px; ><br>
            {$item['product_name']}<br>
            Märke: {$item['brand']}<br>
            Beskrivning: {$item['description']}<br>
            Storlek: {$item['size']}<br>
            Pris: {$item['price']} kr<br>
            Skick: <a href='' title='{$item['meaning']}'> {$item['quality']} </a><br>
            Säljare: {$item['first_name']} {$item['last_name']}<br>
            </p>";
    }
}