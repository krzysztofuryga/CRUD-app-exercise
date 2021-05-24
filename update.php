<?php
include("./htmlParts/header.php");
require_once("users/users.php");


if (!isset($_GET['id'])) {
    include("./htmlParts/userNotFound.php");
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include("./htmlParts/userNotFound.php");
    exit;
}

$errors = [
    'firstName' => "",
    'lastName' => "",
    'phoneNumber' => "",
    'emailAddress' => "",
    'website' => ""
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: index.php");
    }
}


?>


<?php include("_form.php") ?>

        