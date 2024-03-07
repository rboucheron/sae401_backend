<?php

$datas = json_decode(file_get_contents('php://input'), true);

switch ($table) {
    case 'box':

        include('./src/controller/BoxController.php');
        $controller = new BoxController;
        Put($controller, $datas);
        break;

    case 'savor':

        include('./src/controller/SavorController.php');
        $controller = new SavorController;
        Put($controller, $datas);
        break;

    case 'aliment':

        include('./src/controller/AlimentController.php');
        $controller = new AlimentController;
        Put($controller, $datas);
        break;
}

function Put($controller, $datas)
{
    if (isset($_GET['id']) && ($_GET['id'] != '')) {
        $controller->update($_GET['id'], $datas);
    } else {
        include('./src/httpcode/404.php');
    }
  
}