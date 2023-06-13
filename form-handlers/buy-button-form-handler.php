<?php

require '../classes/models/items-model.php';
$itemModel = new ItemsModel(require '../partials/connect.php');

if (isset($_POST['id'])) {
    $itemId = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $itemModel->uptadeItemToSold($itemId);
}

header("Location: ../items.php");