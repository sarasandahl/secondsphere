<?php

class SingleItemView {
    public function renderSingleItem($item):void {
        echo 
        " 
        <p> 
        <img src='{$item['image']}' alt='image' height='600px'><br>

            {$item['product_name']},<br>
            Märke: {$item['brand']},<br>
            Beskrivning: {$item['description']},<br>
            Storlek: {$item['size']},<br>
            Pris: {$item['price']} kr,<br>
            Skick: {$item['quality']} <br>
            Säljare: {$item['first_name']} {$item['last_name']}<br>
            <button type='submit'>KÖP</button>
            </p>";
    }
}
