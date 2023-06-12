<?php

require 'classes/views/single-item-view.php';
require 'classes/db.php';
require 'classes/models/items-model.php';

$pdo = require 'partials/connect.php';
$itemsModel = new ItemsModel($pdo);
$singleItemView = new SingleItemView();
$id = $_GET['post'];

// ==============================================
// Skapa vy nedan

include 'partials/header.php';
?>

<div class="single-item-container">
    <?php $singleItemView->renderSingleItem($itemsModel->getOneItemWithUsersAndConditions($id)); ?>

<?php

//knapp för att köpa kopplat till sidans modell
include 'classes/views/forms/buy-button.php';
?>

</div>

<?php

include 'partials/footer.php';