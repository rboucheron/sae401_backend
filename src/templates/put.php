<?php
if ($table == 'box') {

    include('./src/controller/BoxController.php');

    $box = new BoxController;

    $datas = json_decode(file_get_contents('php://input'), true);

    foreach ($datas as $data) {
        echo $box->updatebox($_GET['box'], $data);
    }
} elseif ($table == 'savor') {

    include('./src/controller/SavorController.php');
    $savor = new SavorController;
    $datas = json_decode(file_get_contents('php://input'), true);
    foreach ($datas as $data) {
        echo $savor->updateSavor($_GET['savor'], $data);
    }
} elseif ($table == 'aliment') {

    include('./src/controller/AlimentController.php');

    $aliment = new AlimentController;

    $datas = json_decode(file_get_contents('php://input'), true);

    foreach ($datas as $data) {
        echo $aliment->updateAliment($_GET['aliment'], $data);
    }
}
