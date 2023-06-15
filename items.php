<?php

require 'classes/views/items-view.php';
require 'classes/db.php';
require 'classes/models/items-model.php';

$pdo = require 'partials/connect.php';
$itemsModel = new ItemsModel($pdo); //ger tillgång till modellen med funktioner i ItemsModel
$itemsView = new ItemsView(); //ger tillgång till klassen med funktioner i ItemsView

// ==============================================

include 'partials/header.php';

// Vy för sida med alla varor. Outputar även två forms. En för att lägga till en vara och en för att köpa vara

?>

<h2>Varor</h2>

<div class="items-container">
<!-- Kör funktionen renderAllItemsAsList från items-view.php, tar in prepared statement/funktionen getAllItems från items-model.php som argument. De "knyts ihop" -->
    <?php $itemsView->renderAllItemsAsList($itemsModel->getAllItems());?> 
</div>


<div class="forms-container">
    <div class="new-item-container">
        <h4>Lägg till en vara till försäljning </h4><br> 
        <p>Fyll i fältet nedan och lägg upp varan till försäljning på en gång</p>
        <?php include 'classes/views/forms/item-form.php'; ?> <!-- inkluderar formuläret för ny vara -->
    </div>

    <div class="buy-item">
        <h4>Köp en vara<h4> <br> 
        <p>Välj varan du vill köpa i fältet nedan</p>
        <?php include 'classes/views/forms/buy-button-form.php'; ?> <!-- inkluderar formuläret för att köpa vara -->
    </div>
</div>

<?php 

include 'partials/footer.php';