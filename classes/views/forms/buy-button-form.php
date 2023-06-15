<?php

$itemsModel = new ItemsModel(connect($host, $db, 'secondsphere', $password)); // vet inte varför $user inte fungerar?

?>
<!-- Formulär för att köpa en vara med post, genom scrolldown på alla varor som INTE är sålda. Action så att buy-button-form-handler.php utförs --> 
<form action="form-handlers/buy-button-form-handler.php" method="post">
    <div>
        <label for="item">Välj vara:</label>
        <select name="id" id="item">
            <option value="">--Välj vara--</option>

            <?php
            $items = $itemsModel->getAllItems();
            foreach ($items as $item) {
                if ($item['sold'] == 0) {
                echo "<option value='{$item['id']}'>
                    {$item['id']} {$item['product_name']}
                </option>";
                }
            }
            ?>
            
        </select>
    </div>
    <button type="submit">Köp vara</button>
</form>