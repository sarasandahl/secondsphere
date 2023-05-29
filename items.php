<?php


require 'classes/views/item-view.php';
require 'classes/db.php';
require 'classes/models/item-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);//ska den vara här?
$itemModel = new ItemModel($pdo);
$itemView = new ItemView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här
?>

<h1>Varor</h1>
<?php
    $itemView->renderAllItemsAsList($itemModel->getAllItems());
?>
<button>Ny vara</button>

<?php

//$userView->renderAllUsersAsList($userModel->getAllUsers());
// gör om för tre tabeller!

include 'partials/footer.php';