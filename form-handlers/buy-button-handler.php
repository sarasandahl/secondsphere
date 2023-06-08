<?php

require '../classes/models/items-model.php';
$itemModel = new ItemsModel(require '../partials/connect.php');

if (isset($PUT['sold'])) {
    $sold = filter_var($PUT['sold'], FILTER_SANITIZE_NUMBER_INT);
    $itemModel->uptadeItemToSold($sold);
}

header("Location: ../items.php");