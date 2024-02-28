<?php
include('./src/controller/BoxController.php');
$box = new BoxController;
print $box->deleteBox($_GET['box']);
