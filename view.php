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

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['firstName'] . " " . $user['lastName'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['userId'] ?>">Update</a>
            <form style="display: inline-block;" action="delete.php" method="post">
                <input type="hidden" name="userId" value="<?php echo $user['userId'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
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
                    <td>
                        <a target="_blank" href="http://<?php echo $user['website'] ?>">
                            <?php echo $user['website'] ?>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


<?php include("./htmlParts/footer.php"); ?>