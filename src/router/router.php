<?php
require './vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->map('GET', '/api', 'api');
//les boxes
$router->map('GET', '/api/boxs', 'get_allbox');
$router->map('GET', '/api/box', 'get_box');
$router->map('Delete', '/api/box', 'delete_box');
$router->map('POST', '/api/box', 'post_box');
$router->map('PUT', '/api/box', 'put_box');

//les saveurs
$router->map('GET', '/api/savors', 'get_allsavor');
$router->map('GET', '/api/savor', 'get_savor');
$router->map('Delete', '/api/savor', 'delete_savor');
$router->map('POST', '/api/savor', 'post_savor');
$router->map('PUT', '/api/savor', 'put_savor');

//les aliments

$router->map('GET', '/api', 'api');
$router->map('GET', '/api/aliments', 'get_allaliment');
$router->map('GET', '/api/aliment', 'get_aliment');
$router->map('Delete', '/api/aliment', 'delete_aliment');
$router->map('POST', '/api/aliment', 'post_aliment');
$router->map('PUT', '/api/aliment', 'put_aliment');




$match = $router->match();

if (is_array($match)) {
    $params = $match['params'];
    require "./src/templates/{$match['target']}.php";
} else {
    require "./src/httpcode/404.php";
}
