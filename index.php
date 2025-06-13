<?php
require_once 'loader.php';
$request = $_REQUEST['q'];

$requests = explode('/', $request);

$first = $requests[0];

$routes = [
    '' => 'index.php',
    'register' => 'templates/register.php',
    'login' => 'templates/login.php'
];

if (isset($routes[$first])) {
    require_once $routes[$first];
} else {
    header('location:');
}?>
<h1>homepage</h1>

