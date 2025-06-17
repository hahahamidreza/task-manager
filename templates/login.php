<?php
$data = [
    'name' => 'hamid',
    'email' => 'hamid@gmail.com',
    'password' => '123456'
    // 'test' => 'hi!'
];
$result = db_insert('users', $data);
print_r($result);
echo "hello";
require_once 'header.php'; ?>
<div class="container">
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
    <div class="d-flex justify-content-center">
        <form action="handle.php" class="d-flex border rounded p-3 mt-3 bg-light border-secondary gap-1 flex-column col-4" method="post">
            <h2>login</h2>
            <label for="email">email</label>
            <input type="email" id="email" name="email">
            <label for="pass">password</label>
            <input type="password" id="pass" name="pass">
            <input value="login" type="submit" name="submit" class="btn btn-dark">
            <input type="hidden" name="type" value="login">
            <p>don't have an account?<a href="localhost/task-manager/register">register here</a></p>
        </form>
    </div>
</div>
<?php require_once "footer.php";
