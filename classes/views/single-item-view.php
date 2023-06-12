<?php

//renderar en bild genom länken och skriver ut den information jag vill åt med tillhörande information om säljare samt varans kvalité
class SingleItemView {

    public function renderSingleItem($item):void {
        echo "<p> 
            <img src='{$item['image']}' alt='image' style='float:left;height='600px; ><br>
            {$item['product_name']}<br>
            Märke: {$item['brand']}<br>
            Beskrivning: {$item['description']}<br>
            Storlek: {$item['size']}<br>
            Pris: {$item['price']} kr<br>
            Skick: <a href='' title='{$item['description']}'> {$item['quality']} </a><br>
            Säljare: {$item['first_name']} {$item['last_name']}<br>
            </p>";
    }
}