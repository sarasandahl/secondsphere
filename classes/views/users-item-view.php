<?php

class UsersItemView {
    public function renderSingleUsersItems(array $items):void {

        foreach((array) $items['product_name'] as $items) {
            echo "<li>{$items}</li>";
        }
    }
}