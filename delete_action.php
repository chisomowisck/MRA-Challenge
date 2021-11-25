<?php
include('httpCurl.php');

$tpin = $_GET['id'];

$data = array(
    "TPIN"=>$tpin
);

$dd=json_encode($data);

$res =  httpRequestPost('/Taxpayers/delete',$dd);

// echo $res;
print_r($res);

$data_res = json_decode($res);
// print_r($data_res);
// exit();

header('Location: index.php');
