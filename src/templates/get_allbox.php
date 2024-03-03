<?php 
include('./src/controller/BoxController.php'); 
$box = new BoxController; 
$response = $box->getAllBoxs(); 

if (json_decode($response, true)  == []) {
    include('./src/httpcode/404.php');
} else {
    echo $response;
}
