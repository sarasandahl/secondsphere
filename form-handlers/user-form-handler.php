<?php

require '../classes/models/users-model.php';
$userModel = new UsersModel(require '../partials/connect.php');

if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'])) {
    $firstName = filter_var($_POST['first_name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_var($_POST['last_name'], FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_SPECIAL_CHARS);
    $userModel->addUser($firstName,$lastName,$email);
}

header("Location: ../users.php");
