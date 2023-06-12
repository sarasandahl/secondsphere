<?php

//1.
class UsersItemView {
    public function renderSingleUsersItems(array $items):void {
        $num=0;

        foreach ($items as $item){
            $num++; 
            echo "<br><b># $num</b><br>";
                foreach ($item as $key=>$value) {
                echo "$key: $value <br>";
            }
        }
    }
}

////////////////////////////////////////////////////////////////////////////

//2.

        foreach ($items as $item ) {

            foreach ($item as $key => $value ) {
            	echo $key . ": " . $value . "<br>";             
            }
        }


////////////////////////////////////////////////////////////////////////////

//3.
foreach($items as $item) {
        ?>
            <div>
            <h4><?= $item["product_name"] ?></h4>

            <?php
            echo "<img src='{$item['image']}' alt='image' height='600px'><br>";

            ?>
            <p>Pris: <?= $item["price"] ?></p>
        </div>
        <?php
        }
