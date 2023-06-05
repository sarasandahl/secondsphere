<?php

require 'classes/views/single-user-view.php';
require 'classes/views/users-item-view.php';
require 'classes/db.php';
require 'classes/models/users-model.php';
require 'classes/models/items-model.php';

$pdo = require 'partials/connect.php';

$usersModel = new UsersModel($pdo);
$singleUserView = new SingleUserView();

$itemsModel = new ItemsModel($pdo);
$userItemsView = new UsersItemView();

$id = $_GET['post'];

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här om book-tabellen!
$singleUserView->renderSingleUser($usersModel->getUser($id));
?>

<p>Säljarens produkter:<p>
    
<?php
    //FUNKAR INTE
$userItemsView->renderSingleUsersItems($itemsModel->getItemsFromUser($id));

include 'partials/footer.php';