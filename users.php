<?php

require 'classes/views/user-view.php';
require 'classes/db.php';
require 'classes/models/user-model.php';

$pdo = require 'partials/connect.php';

$db = new DB($pdo);//ska den vara här?
$userModel = new UserModel($pdo);
$userView = new UserView();

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här
?>

<h1>Säljare</h1>
<?php
    $userView->renderAllUsersAsList($userModel->getAllUsers());
?>

<button>Ny Säljare</button>

<?php

include 'partials/footer.php';