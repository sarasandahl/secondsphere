<?php

require 'classes/views/items-view.php';
require 'classes/db.php';
require 'classes/models/items-model.php';

$pdo = require 'partials/connect.php';
$itemsModel = new ItemsModel($pdo);
$itemsView = new ItemsView();

// ==============================================

include 'partials/header.php';

// våran apps vyer här
?>

<h2>Varor</h2>

<div class="items-container">

    <?php $itemsView->renderAllItemsAsList($itemsModel->getAllItems());?>

</div>

<div class="new-item-container">

    <p>Lägg till en vara till försäljning <br> 
    Fyll i fältet nedan och lägg upp varan till försäljning på en gång</p>

    <?php include 'classes/views/forms/item-form.php'; ?>

</div>

<?php include 'partials/footer.php';