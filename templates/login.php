<?php
$data = [
    // 'name' => 'Hamid',
    // 'email' => 'hamid@gmail.com'
    // 'password' => '123456'
];
$result = db_insert('users', $data);
//echo "hello";
print_r($result);
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
    <form action="handle.php" class="d-flex flex-column" method="post">
        <h2>login</h2>
        <label for="email">email</label>
        <input type="email" id="email" name="email">
        <label for="pass">password</label>
        <input type="password" id="pass" name="pass">
        <input value="login" type="submit" name="submit">
        <input type="hidden" name="type" value="login">
    </form>
</div>