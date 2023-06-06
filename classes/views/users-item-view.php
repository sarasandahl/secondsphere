<?php

    class UsersItemView {
        public function renderSingleUsersItems(array $items):void {
    
        foreach($items as $item) {
        ?>
            <div>
            <h4><?= $item["product_name"] ?></h4>

            <?php
            echo "<img src='{$item['image']}' alt='image' height='600px'><br>";

            ?>
            <p>Pris: <?= $item["price"] ?></p>
            <p>Finns i lager?: <?= $item["sold"] ?></p>
        </div>
        <?php
        }
    }
}