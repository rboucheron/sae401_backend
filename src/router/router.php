<?php
require './vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->map('GET', '/api/boxs', 'get_allbox');
$router->map('GET', '/api/box', 'get_box');
$router->map('Delete', '/api/box', 'delete_box');
$router->map('POST', '/api/box', 'post_box');
$router->map('PUT', '/api/box', 'put_box');
$match = $router->match();

if (is_array($match)) {
    $params = $match['params'];
    require "./src/templates/{$match['target']}.php";
} else {
    require "./src/httpcode/404.php";
}
