<?php

class UsersItemView {
    public function renderSingleUsersItems(array $items):void {
        echo "<ul>";
        foreach($items as $item) {
            "<p>Varor: {$item['product_name']}<br>
            </p>"; //här ska också bild in
        }
        echo "</ul>";
    }   
}

//if