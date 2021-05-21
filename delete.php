<?php
include("./htmlParts/header.php");
require_once("users/users.php");

if (!isset($_POST['userId'])) {
    include("./htmlParts/userNotFound.php");
    exit;
}
$userId = $_POST['userId'];
deleteUser($userId);

header("Location: index.php");
