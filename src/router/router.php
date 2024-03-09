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
    $datas = json_decode(file_get_contents('php://input'), true);
    require "./src/database/Model.php";
    require "./src/templates/{$match['target']}.php";
} else {
    require "./src/httpcode/400.php";
}
