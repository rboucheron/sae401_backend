<?php
include ('./src/controller/AlimentController.php');
$box = new AlimentController;
$box->deleteAliment($_GET['aliment']);


?>