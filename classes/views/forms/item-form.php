<?php
require 'classes/models/users-model.php';
require 'classes/models/conditions-model.php';

//Får tillgångar till usersmodel och conditionsmodel
$usersModel = new UsersModel(connect($host, $db, $user, $password));
$conditionsModel = new ConditionsModel(connect($host, $db, $user, $password));
?>
<!-- Formulär för att skapa en vara med post, väljer försäljare och condition åt varan. Action så att item-form-handler.php utförs --> 
<form action="form-handlers/item-form-handler.php" method="post">
    <div>
        <label for="user">Säljare:</label>
        <select name="userId" id="user">
            <option value="">--Välj säljare--</option>

            <?php
            $users = $usersModel->getAllUsers();
            foreach ($users as $user) {
                echo "<option value='{$user['id']}'>
                    {$user['first_name']} {$user['last_name']}
                </option>";
            }
            ?>

        </select>
    </div>
    <div>
        <label for="product_name">Rubrik: </label>
        <input type="text" name="product_name" id="product_name">
    </div>
    <div>
        <label for="brand">Märke: </label>
        <input type="text" name="brand" id="brand">
    </div>
    <div>
        <label for="type">Typ av plagg: </label>
        <input type="text" name="type" id="type">
    </div>
    <div>
        <label for="description">Beskrivning: </label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="size">Storlek: </label>
        <input type="text" name="size" id="size">
    </div>
    <div>
        <label for="price">Pris: </label>
        <input type="number" name="price" id="price" min="50" max="50000">
    </div>
    <div>
        <label for="condition">Vilket skick är varan:</label>
        <select name="conditionId" id="condition">
            <option value="">--Välj skick--</option>

            <?php
            $conditions = $conditionsModel->getAllConditions();
            foreach ($conditions as $condition) {
                echo "<option value='{$condition['id']}'>
                    {$condition['quality']}
                </option>";
            }
            ?>

        </select>
    </div>
    <div> <!-- https://talkerscode.com/webtricks/upload-image-from-url-using-php.php -->
        <label for="image">Bild: </label>
        <input type="text" name="image" placeholder="Skriv in bild-URL">
    </div>
    <button type="submit">Lägg till Vara</button>
</form>