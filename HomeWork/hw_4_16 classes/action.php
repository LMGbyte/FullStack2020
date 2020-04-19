<?php

require_once 'boot.php';
require 'class416.php';

$time = date("Y-m-d H:i:s");
$msg = 'Button pressed';

$info = new logmanage;

$data[] = array(
    'time' => $time,
    'status' => $msg,
    'msg' => $_POST['msgLine'],
);

$info->appednLog($data, LOG_FILE);

header('location: index.php');

?>