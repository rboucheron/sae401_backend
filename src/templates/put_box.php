<?php
include('./src/controller/BoxController.php');
$box = new BoxController;

$data = file_get_contents('php://input');
$tabl = json_decode($data, true);

foreach ($tabl as $tabls) {
    echo $box->updatebox($tabls, $_GET['box']);
}
