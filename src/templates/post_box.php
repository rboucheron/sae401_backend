<?php
include('./src/controller/BoxController.php');
$box = new BoxController;


$datas = json_decode(file_get_contents('php://input'), true);

foreach ($datas as $data) {
   echo $box->postbox($data);
}
