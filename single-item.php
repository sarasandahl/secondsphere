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

// våran apps vyer här om book-tabellen!
$singleItemView->renderSingleItem($itemsModel->getItem($id));

include 'forms/book-review-form.php';

include 'partials/footer.php';