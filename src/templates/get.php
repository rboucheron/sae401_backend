<?php

switch ($table) {
    case 'box':

        include('./src/controller/BoxController.php');
        $controller = new BoxController;
        Get($controller);
        break;

    case 'savor':

        include('./src/controller/SavorController.php');
        $controller = new SavorController;
        Get($controller);
        break;

    case 'aliment':

        include('./src/controller/AlimentController.php');
        $controller = new AlimentController;
        Get($controller);
        break;


    default:
        include('./src/httpcode/400.php');
}

function Get($controller)
{
    if (isset($_GET['id']) && ($_GET['id'] != '')) {
        $response =  $controller->get($_GET['id']);
    } else {
        $response = $controller->getAll();
    }
    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }
}
