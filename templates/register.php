<?php require_once "header.php" ?>
<div class="container">
    <div class="d-flex justify-content-center">
        <?php if (isset($success)): ?>
            <div class="position-absolute top-0 alert alert-success" role="alert">
                <?php echo $success; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="position-absolute top-0 alert alert-danger" role="alert">
                <?php echo $error; ?>
            </div>
        <?php endif; ?>
        <form action="handle.php" class="d-flex border rounded p-3 mt-3 bg-light border-secondary gap-1 flex-column col-4" method="post">
            <h2>register</h2>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
            <label for="password">password</label>
            <input type="password" name="password" id="password" required>
            <label for="pass_con">confirm your password</label>
            <input type="password" name="pass_con" id="pass_con" required>
            <input type="submit" value="Register" name="submit" class="btn btn-dark">
            <input type="hidden" value="register">
            <p>already have an account?<a href="login.php">Login here</a></p>
        </form>
    </div>
</div>
<?php require_once "footer.php" ?>