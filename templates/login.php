<?php
$data = [
    'name' => 'Hamid',
    'email' => 'hamid@gmail.com',
    'password' => '123456'
];
$result = db_insert('users',$data);
//echo "hello";
print_r($result);
require_once 'header.php';?>
<form action="handle.php" class="d-flex flex-column" method="post">
    <label for="email">email</label>
    <input type="email" id="email" name="email">
    <label for="pass">password</label>
    <input type="password" id="pass" name="pass">
</form>
