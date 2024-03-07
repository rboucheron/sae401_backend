<?php

switch ($table) {
    case 'box':

        include('./src/controller/BoxController.php');
        $controller = new BoxController;
        $controller->delete($_GET['id']);
        break;

    case 'savor':

        include('./src/controller/SavorController.php');
        $controller = new SavorController;
        $controller->delete($_GET['id']);
        break;

    case 'aliment':

        include('./src/controller/AlimentController.php');
        $controller = new AlimentController;
        $controller->delete($_GET['id']);
        break;

    default:
        include('./src/httpcode/400.php');
}
