<?php require_once '../header.php';
require_once "../loader.php";
?>
<div class="container">
    <div class="d-flex justify-content-center">
        <form action="handle.php" class="d-flex position-relative border rounded p-3 mt-3 bg-light border-secondary gap-1 flex-column col-4" method="POST">
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
            <h2>login</h2>
            <label for="email">email</label>
            <input type="email" id="email" name="email" required>
            <label for="pass">password</label>
            <input type="password" id="pass" name="password" required>
            <input value="login" type="submit" name="submit" class="btn btn-dark">
            <input type="hidden" name="type" value="login">
            <p>don't have an account?<a href="<?php base_url() ?>register">register here</a></p>
        </form>
    </div>
</div>
<?php require_once "../footer.php";