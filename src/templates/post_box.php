<?php
include('./src/controller/BoxController.php');
$box = new BoxController;
print $box->getBox($_POST['box']);
