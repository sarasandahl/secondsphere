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

<h1>Säljare</h1>
<?php
    $usersView->renderAllUsersAsList($usersModel->getAllUsers());
?>

<button>Ny Säljare</button>

<?php

include 'partials/footer.php';