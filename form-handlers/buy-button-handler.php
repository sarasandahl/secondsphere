<?php
//ska den här vara en form-handler?
require '../classes/models/items-model.php';
$itemModel = new ItemsModel(require '../partials/connect.php');
// $id = $_GET['post'];

if (isset($_POST['sold'])) {
    // skicka in ett $id här'
    $itemModel->uptadeItemToSold();
}

header("Location: ../items.php");