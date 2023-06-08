<?php

class UsersItemView {
    public function renderSingleUsersItems(array $items):void {
            //om vara finns gör det här...
        foreach($items as $item) {
            if ($item["product_name"] != NULL) { 
            ?>
            <div>
            <h4><?= $item["product_name"] ?></h4>
            <?php echo "<img src='{$item['image']}' alt='image' height='600px'><br>";?>
            <p>Pris: <?= $item["price"] ?> kr</p>
            <p>Status: 
                <?php if ($item["sold"] == 0) {
                    echo 'Finns i lager';
                } else {
                    echo 'Såld';
                };?></p>
            </div>
            <?php } else { //om varas inte finns visa ingenting alt: "Den här säljaren har inga varor"
                echo "Finns inga varor till försäljning"; 
            }   
        }
    }
}