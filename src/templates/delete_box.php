<?php
include('./src/controller/BoxController.php');
$box = new BoxController;
$box->deleteBox($_GET['box']);
