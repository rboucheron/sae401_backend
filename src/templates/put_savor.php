<?php
include('./src/controller/SavorController.php');
$savor = new SavorController;

$datas = json_decode(file_get_contents('php://input'), true);

foreach ($datas as $data) {
    echo $savor->updateSavor($_GET['savor'], $data);
}
