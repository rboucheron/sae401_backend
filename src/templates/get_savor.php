<?php

if ($_GET['savor'] != '') {

    include('./src/controller/SavorController.php');
    $savor = new SavorController;
    $response =  $savor->getSavor($_GET['savor']);

    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }
} else {
    include('./src/httpcode/404.php');
}
