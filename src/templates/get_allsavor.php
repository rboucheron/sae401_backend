<?php
include('./src/controller/SavorController.php');
$savor = new SavorController;
$response = $savor->getAllSavors();

if (json_decode($response, true)  == []) {
    include('./src/httpcode/404.php');
} else {
    echo $response;
}
