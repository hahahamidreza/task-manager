<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "loader.php";
if (isset($_POST['submit'])) {
    echo "submitted";
    exit;
    $type = $_POST['type'];
    if ($type == "register") {
        // $name = ;
        // $email = ;
        // $pass = ;
        $data = [
            'name' => $_POST['name'],
            'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            'password' => md5($_POST['password'])
        ];
        $pass2 = md5($_POST['pass_con']);
        if (
            empty($data['email']) || empty($data['password'])
            || empty($pass2)
        ) {
            echo "empty fields";
            $error = 'please  fill out all fields';
            require_once "templates/register.php";
            exit;
        }
        if ($data['password'] != $pass2) {
            echo "pass don't match";
            $error = 'passwords do not match';
            require_once "templates/register.php";
            exit;
        }
        $result = db_insert('users', $data);
        if ($result) {
            $success = "user added successfully, you may now login";
            require_once "templates/login.php";
        } else {
            $error = "something went wrong! please try again later";
            echo "hi";
            require_once "templates/register.php";
        }
    }
    if ($type == "login") {
        $data = [
            'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            'password' => md5($_POST['password'])
        ];
        if (empty($data['email']) || empty($data['password'])) {
            $error = 'please  fill out all fields';
            require_once "templates/login.php";
            exit;
        }
        $result = db_insert('users', $data);
        if ($result) {
            $success = "you are logged in, going to panel";
            // header("location:templates/panel.php");
            echo "success";
            exit;
        } else {
            $error = "something went wrong! try again later";
            // require_once "templates/login.php";
            echo "failure";
        }
    }
}else{
    echo "not submitted";
    exit;
}
