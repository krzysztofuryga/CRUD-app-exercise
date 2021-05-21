<div class="container">
    <div class="card">
        <div class="card-header">
            <?php if ($user['userId']) : ?>
                <h3>Update User: <b><?php echo $user['firstName'] . " " . $user['lastName'] ?></b></h3>
            <?php else : ?>
                <h3>Create New User</h3>
            <?php endif ?>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data" action="">
                <div class="form-group">
                    <label for="">First Name</label>
                    <input type="text" name="firstName" value="<?php echo $user['firstName'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Last Name</label>
                    <input type="text" name="lastName" value="<?php echo $user['lastName'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Phone Number</label>
                    <input type="text" name="phoneNumber" value="<?php echo $user['phoneNumber'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="emailAddress" value="<?php echo $user['emailAddress'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Website</label>
                    <input type="text" name="website" value="<?php echo $user['website'] ?>" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="picture" class="form-control">
                </div>

                <button class="btn btn-success">Submit</button>
                <a class="btn btn-secondary" href="index.php">Back</a>
            </form>
        </div>
    </div>
</div>