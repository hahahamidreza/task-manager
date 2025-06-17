<?php
if(isset($_POST['submit'])){
    $type = $_POST['type'];
    if($type = "register"){
        $data =[
            $name = $_POST['name'],
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            $pass = md5($_POST['pass']),
            $pass2 = md5($_POST['pass_con'])
        ];
        if(empty($data[$email]) || empty($data[$pass])
        || empty($data[$pass2])){
            $error = 'please  fill out all fields';
            require_once "templates/register.php";
            exit;
        }
        if($pass != $pass2){
            $error = 'passwords do not match';
            require_once "templates/register.php";
            exit;
        }
        $result = db_insert('users',$data);
        if($result){
            $success = "user added successfully, you may now login";
            require_once "templates/login.php";
        }else{
            $error = "something went wrong! please try again later";
            require_once "templates/register.php";
        }
    }
    if($type = "login"){
        $data = [
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL),
            $pass = md5($_POST['password'])
        ];
        if(empty($data[$email]) || empty($data[$pass])){
            $error = 'please  fill out all fields';
            require_once "templates/login.php";
            exit;
        }
        // if()
    }
}