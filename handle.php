<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
require_once "loader.php";
session_start();
$submit = $_POST['submit'];
if (isset($submit)) {
    // echo "submitted";
    // exit;
    $type = $_POST['type'];
    if ($type === "register") {
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
            // echo "empty fields";
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
        $email = $data['email'];
        $sql = "SELECT * FROM `users` WHERE `email` = '$email'";
        $check_1 = db_select_one($sql);
        if ($check_1) {
            $error = "there is already an account with this email";
            require_once "templates/register.php";
            echo "check stage!";
            exit;
        }
        $result = db_insert('users', $data);
        if ($result) {
            $success = "user added successfully, you may now login";
            header("location:$base_url/login");
            // require_once "login.php";
            exit;
        } else {
            $error = "something went wrong! please try again later";
            echo "hi";
            require_once "templates/register.php";
            exit;
        }
    }
    if ($type === "login") {
        $data = [
            'email' => filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            'password' => md5($_POST['password'])
        ];
        if (empty($data['email']) || empty($data['password'])) {
            $error = 'please  fill out all fields';
            require_once "templates/login.php";
            exit;
        }
        $email = $data['email'];
        $pass = $data['password'];
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$pass'";
        $result = db_select($sql);
        if ($result) {
            $msql = mysqli_query(db_conn(), $sql);
            $user = mysqli_fetch_assoc($msql);
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $success = "you are logged in, going to panel";
            // $base_url = base_url();
            header("location:$base_url/panel");
            // echo "success";
            exit;
        } else {
            $error = "email or password is wrong!";
            require_once "templates/login.php";
            // echo "failure";
            exit;
        }
    }
    if($type === "new-task") {
        $data = [
            'task_tittle' => $_POST['task_name'],
            'task_des' => $_POST['task_des'],
            'task_urgent' => $_POST['task_urgent'],
            'deadline' => $_POST['task_dead']
        ];
        if(!empty ($data['task_tittle'])) {
            $error = "your task needs a tittle";
            require_once "templates/new-task.php";
            exit;
        }
        if(!empty ($data['deadline'])) {
            $error = "your task needs a deadline";
            require_once "templates/new-task.php";
            exit;
        }

    }
} else {
//    echo "not submitted";
    exit;
}
