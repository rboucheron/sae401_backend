<?php
include('./src/controller/AlimentController.php'); 
$aliment = new AlimentController; 
$response = $aliment->getAllAliment(); 

if (json_decode($response, true)  == []) {
    include('./src/httpcode/404.php');
} else {
    echo $response;
}


?>