<?php
include('./src/controller/BoxController.php');
$box = new BoxController;
echo $box->getBox($_GET['box']);
