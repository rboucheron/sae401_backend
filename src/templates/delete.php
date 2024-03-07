<?php


if (isset($_GET['id']) && ($_GET['id'] != '')) {
    if ($table == 'box') {

        include('./src/controller/BoxController.php');
        $box = new BoxController;
        $box->deleteBox($_GET['id']);

    } elseif ($table == 'savor') {

        include('./src/controller/SavorController.php');
        $savor = new SavorController;
        $savor->deleteSavor($_GET['id']);

    } elseif ($table == 'aliment') {

        include('./src/controller/AlimentController.php');
        $box = new AlimentController;
        $box->deleteAliment($_GET['id']);
    }
}
