<?php
include('./src/controller/AlimentController.php');
$aliment = new AlimentController;

$datas = json_decode(file_get_contents('php://input'), true);

foreach ($datas as $data) {
    echo $aliment->updateAliment($_GET['aliment'], $data);
}







?>