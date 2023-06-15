<?php

//Kör igenom och skriver ut varor på en säljare hämtat på id:et. Kör en each för att fånga upp om det ej finns varor. Är det snyggt att köra på product_name? Finns ej user.id för då hittar den ej användar:idet
class UsersItemView {
    public function renderSingleUsersItems(array $items):void {

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
            <?php } else { 
                echo "Denna säljare har inte lagt upp några varor till försäljning"; 
            }   
        }
    }
}