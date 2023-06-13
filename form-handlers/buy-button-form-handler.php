<?php

require '../classes/models/items-model.php';
$itemModel = new ItemsModel(require '../partials/connect.php');

if (isset($_POST['id'])) {
    $itemId = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $productName = filter_var($_POST['product_name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $sold = filter_var($_POST['sold'], FILTER_SANITIZE_NUMBER_INT);
    $itemModel->uptadeItemToSold($itemId);
}

header("Location: ../items.php");