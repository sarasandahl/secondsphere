<?php

require 'classes/views/single-user-view.php';
require 'classes/db.php';
require 'classes/models/users-model.php';

$pdo = require 'partials/connect.php';

$usersModel = new UsersModel($pdo);
$singleUserView = new SingleUserView();
$id = $_GET['post'];

// ==============================================
// Skapa vy nedan

include 'partials/header.php';

// våran apps vyer här om book-tabellen!
$singleUserView->renderSingleUser($usersModel->getUser($id));

include 'forms/book-review-form.php';

include 'partials/footer.php';