<?php

if ($table == 'box') {

    include('./src/controller/BoxController.php');
    $box = new BoxController;

    $datas = json_decode(file_get_contents('php://input'), true);
    var_dump($datas);
    
    echo $box->postbox($datas);
} elseif ($table == 'savor') {

    include('./src/controller/SavorController.php');

    $savor = new SavorController;

    $datas = json_decode(file_get_contents('php://input'), false);
    var_dump($datas);

    echo $savor->postSavor($data);
} elseif ($table == 'aliment') {

    include('./src/controller/AlimentController.php');

    $aliment = new AlimentController;

    $datas = json_decode(file_get_contents('php://input'), true);
    var_dump($datas);


    echo $aliment->postAliment($datas);
}
