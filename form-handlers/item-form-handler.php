<?php

require '../classes/models/items-model.php';
$itemModel = new ItemsModel(require '../partials/connect.php');

if (isset($_POST['product_name'], $_POST['brand'], $_POST['type'], $_POST['description'], $_POST['size'], $_POST['price'])) {
    $userId = filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT);
    $productName = filter_var($_POST['product_name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $brand = filter_var($_POST['brand'], FILTER_SANITIZE_SPECIAL_CHARS);
    $type = filter_var($_POST['type'], FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_SPECIAL_CHARS);
    $size = filter_var($_POST['size'], FILTER_SANITIZE_SPECIAL_CHARS);
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_INT);
    $conditionId = filter_var($_POST['conditionId'], FILTER_SANITIZE_NUMBER_INT);
    $itemModel->addItem($userId,$productName,$brand,$type,$description,$size,$price,$conditionId);
}

header("Location: ../items.php");