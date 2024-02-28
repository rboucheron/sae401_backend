<?php
include('./src/controller/BoxController.php');
$box = new BoxController;
$data = array(); 
$data = file_get_contents('php://input'); 
echo json_decode($data, true); 
echo $box->postbox(json_decode($data, true));

//$box->postbox();
