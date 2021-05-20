<?php
require_once("users/users.php");
$users = getUsers();

include("./htmlParts/header.php");
?>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Image</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Website</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td>
                        <?php if (isset($user['extension'])) : ?>
                            <img style="width: 60px;" src="<?php echo "users/images/${user['userId']}.${user['extension']}" ?>" alt="">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $user['firstName'] ?></td>
                    <td><?php echo $user['lastName'] ?></td>
                    <td><?php echo $user['phoneNumber'] ?></td>
                    <td><?php echo $user['emailAddress'] ?></td>
                    <td>
                        <a target="_blank" href="http://<?php echo $user['website'] ?>">
                            <?php echo $user['website'] ?>
                        </a>
                    </td>
                    <td>
                        <a href="view.php?id=<?php echo $user['userId'] ?>" class="btn btn-sm btn-outline-info">View</a>
                        <a href="update.php?id=<?php echo $user['userId'] ?>" class="btn btn-sm btn-outline-info">Update</a>
                        <a href="delete.php?id=<?php echo $user['userId'] ?>" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php include("./htmlParts/footer.php"); ?>