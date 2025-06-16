<?php require_once "header.php"?>
<div class="container">
    <form action="handle.php" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>
        <label for="password">password</label>
        <input type="password" name="password" id="password" required>
        <label for="pass_con">confirm your password</label>
        <input type="password" name="pass_con" id="pass_con" required>
        <input type="submit" value="register" name="submit" class="btn">
        <input type="hidden" value="register">
    </form>
</div>
<?php require_once "footer.php"?>