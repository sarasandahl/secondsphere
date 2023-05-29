<?php


require 'classes/views/items-view.php';
require 'classes/db.php';
require 'classes/models/items-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);//ska den vara här?
$itemsModel = new ItemsModel($pdo);
$itemsView = new ItemsView();

// ==============================================
// vy nedan

include 'partials/header.php';

// våran apps vyer här
?>

<h1>Varor</h1>
<?php
    $itemsView->renderAllItemsAsList($itemsModel->getAllItems());
?>
<button>Ny vara</button>

<?php

include 'partials/footer.php';