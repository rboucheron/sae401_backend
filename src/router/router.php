<?php
require './vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();

$router->map('GET', '/api/[*:table]', 'get');
$router->map('POST', '/api/[*:table]', 'post');
$router->map('PUT', '/api/[*:table]', 'put');
$router->map('Delete', '/api/[*:table]', 'delete');
$match = $router->match();

if (is_array($match)) {
    $table = $match['params']['table']; 
    require "./src/templates/{$match['target']}.php";
} else {
    require "./src/httpcode/404.php";
}
