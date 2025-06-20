<?php
require_once 'loader.php';
$request = $_REQUEST['q'];

$requests = explode('/', $request);

$first = $requests[0];

$routes = [
    '' => 'index.php',
    'register' => 'templates/register.php',
    'login' => 'templates/login.php',
    'panel' => 'templates/panel.php'
];

if (isset($routes[$first])) {
    require_once $routes[$first];
} else {
    header('location:');
}
require_once "header.php";
?>
<div class="container">
    <div class="d-flex flex-column justify-content-center text-center align-items-center mt-5">
        <p><a href="<?php base_url() ?>login" class="text-decoration-none">Login here</a> if you do have an account</p>
        <p>and if you don't<a href="<?php base_url() ?>register" class="text-decoration-none"> create one here</a></p>
    </div>
</div>
<?php require_once "footer.php";

