<?php
include('./src/controller/SavorController.php');
$savor = new SavorController;
$savor->deleteSavor($_GET['savor']);
