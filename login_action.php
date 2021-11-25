<?php
session_start();
include('httpCurl.php');

$email = $_POST['Email'];
$password = $_POST['Password'];

$data = array(
    "Email"=>$email,
    "Password"=>$password
);

$dd=json_encode($data);

$res =  httpRequestPost('/auth/login',$dd);

// echo $res;
// print_r($res);

$data_res = json_decode($res);
// print_r($data_res);
// exit();
$_SESSION["email"] = $data_res->Token->Name;



if($data_res->Authenticated==true){
    header('Location: index.php');
}else{
    header('Location: login.php');
}