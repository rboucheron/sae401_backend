<?php

if ($table == 'box') {

    include('./src/controller/BoxController.php');
    if (isset($_GET['id']) && ($_GET['id'] != '')) {
        $box = new BoxController;
        $response =  $box->getBox($_GET['id']);
    } else {
        $item = new BoxController;
        $response = $item->getAllBoxs();
    }
    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }
} elseif ($table == 'savor') {

    include('./src/controller/SavorController.php');
    if (isset($_GET['id']) && ($_GET['id'] != '')) {
        $savor = new SavorController;
        $response =  $savor->getSavor($_GET['id']);
    } else {
        $savor = new SavorController;
        $response = $savor->getAllSavors();
    }
    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }
} elseif ($table == 'aliment') {

    include('./src/controller/AlimentController.php');
    if (isset($_GET['id']) && ($_GET['id'] != '')) {
        $aliment = new AlimentController;
        $response =  $aliment->getAliment($_GET['id']);
    } else {
        $aliment = new AlimentController;
        $response = $aliment->getAllAliment();
    }
    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }
}
