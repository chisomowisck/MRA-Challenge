<?php
session_start();
include('httpCurl.php');

$email = $_POST['Email'];
$password = $_POST['Password'];

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

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
    //header('Location: login.php');
}