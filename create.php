<?php
include("./htmlParts/header.php");
require_once("users/users.php");

$user = [
    'userId' => '',
    'firstName' => '',
    'lastName' => '',
    'phoneNumber' => '',
    'emailAddress' => '',
    'website' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = createUser($_POST);


    uploadImage($_FILES['picture'], $user);


    header("Location: index.php");
}

include("_form.php");
