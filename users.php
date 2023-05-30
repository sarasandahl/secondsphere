<?php

require 'classes/views/users-view.php';
require 'classes/db.php';
require 'classes/models/users-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);//ska den vara här?
$usersModel = new UsersModel($pdo);
$usersView = new UsersView();

// ==============================================
// vy nedan

include 'partials/header.php';

// våran apps vyer här
?>
<div class="users-container">
    <h2>Säljare</h2>
    <?php
        $usersView->renderAllUsersAsList($usersModel->getAllUsers());
    ?>
</div>

<div class="new-user-container">
    <p>Vill du sälja hos oss? <br> Skapa en ny användare nedan och börja lägg upp dina varor redan idag!</p>

    <?php include 'classes/views/forms/user-form.php'; ?>
</div>

<?php
include 'partials/footer.php';