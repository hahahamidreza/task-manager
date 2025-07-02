<?php
if(isset($_SESSION['user_id'])){
    header("location:$base_url/panel");
    exit;
}
require_once "header.php";
require_once "loader.php"; ?>
<div class="container">
    <div class="d-flex justify-content-center">
        <form action="handle.php" class="d-flex border position-relative rounded p-3 mt-3 <?php if(isset($_COOKIE)){echo 'bg-dark text-light';} ?> border-secondary gap-1 flex-column col-4" method="POST">
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
            <h2>register</h2>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email" autocomplete="off">Email</label>
            <input type="email" name="email" id="email">
            <label for="password" autocomplete="off">password</label>
            <input type="password" name="password" id="password">
            <label for="pass_con">confirm your password</label>
            <input type="password" name="pass_con" id="pass_con">
            <input type="submit" value="Register" name="submit" class="btn btn-outline">
            <input type="hidden" value="register" name="type">
            <p>already have an account?<a href="<?php base_url() ?>login">Login here</a></p>
        </form>
    </div>
</div>
<?php require_once "footer.php";
