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

$errors = [
    'firstName' => "",
    'lastName' => "",
    'phoneNumber' => "",
    'emailAddress' => "",
    'website' => ""
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = array_merge($user, $_POST);
    // $firstName = $_POST['firstName'];
    // $lastName = $_POST['lastName'];
    // $phoneNumber = $_POST['phoneNumber'];
    // $emailAddress = $_POST['emailAddress'];
    // $website = $_POST['website'];
    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);


        uploadImage($_FILES['picture'], $user);


        header("Location: index.php");
    }
}

include("_form.php");
