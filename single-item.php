<?php

require 'classes/views/single-item-view.php';
require 'classes/db.php';
require 'classes/models/items-model.php';

$pdo = require 'partials/connect.php';
$itemsModel = new ItemsModel($pdo);
$singleItemView = new SingleItemView();
$id = $_GET['post'];

// ==============================================

include 'partials/header.php';

// Vy för sidan med en vara

?>

<div class="single-item-container">
<!-- Kör funktionen renderSingleItem från SingleItemView, tar in prepared statement/funktionen getOneItemWithUsersAndConditions från items-model.php som argument. De "knyts ihop" -->
    <?php $singleItemView->renderSingleItem($itemsModel->getOneItemWithUsersAndConditions($id)); ?>

<?php

?>

</div>

<?php

include 'partials/footer.php';