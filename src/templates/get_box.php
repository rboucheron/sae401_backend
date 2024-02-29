<?php

if ($_GET['box'] != '') {

    include('./src/controller/BoxController.php');
    $box = new BoxController;
    $response =  $box->getBox($_GET['box']);

    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }

    
} else {
    include('./src/httpcode/404.php');
}
