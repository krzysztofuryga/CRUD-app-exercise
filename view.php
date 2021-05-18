<?php
require_once("users.php");

$userId = $_GET['id'];

$user = getUserById($userId);

include("./htmlParts/header.php");
?>

<table class="table">
    <tbody>
        <tr>
            <th>First Name:</th>
            <td><?php echo $user['firstName'] ?></td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td><?php echo $user['lastName'] ?></td>
        </tr>
        <tr>
            <th>Phone Number:</th>
            <td><?php echo $user['phoneNumber'] ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo $user['emailAddress'] ?></td>
        </tr>
        <tr>
            <th>Website:</th>
            <td><?php echo $user['website'] ?></td>
        </tr>
    </tbody>
</table>

<?php include("./htmlParts/footer.php"); ?>