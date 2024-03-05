<?php
if ($_GET['aliment'] != '') {

    include('./src/controller/AlimentController.php');
    $aliment = new AlimentController;
    $response =  $aliment->getAliment($_GET['aliment']);

    if (json_decode($response, true)  == []) {
        include('./src/httpcode/404.php');
    } else {
        echo $response;
    }

    
} else {
    include('./src/httpcode/404.php');
}



?>