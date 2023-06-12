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

include 'partials/header.php';

// våran apps vyer här!

?>

<h3>Information:</h3>

<div class="single-user-container"> 
    <div class="user-information">   
        <?php $singleUserView->renderSingleUser($itemsModel->getUserWithItem($id)); ?>
    </div>

    <div class="user-statistics">   
    <h4>Statistik:</h4>

        <?php $singleUserView->renderUserStats($itemsModel->getItemsFromUser($id)); ?>
    </div>
</div>

<h3>Säljarens produkter:</h3>
<div class="user-products-container">   
    <?php $userItemsView->renderSingleUsersItems($itemsModel->getItemsFromUser($id)); ?>
</div>

<?php

include 'partials/footer.php';