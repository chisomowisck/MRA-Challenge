<?php
include('httpCurl.php');

$tpin = $_POST['TPIN'];
$businessCert = $_POST['BusinessCertificateNumber'];
$tradingName = $_POST['TradingName'];
$businessReg = $_POST['BusinessRegistrationDate'];
$mobileNumber = $_POST['MobileNumber'];
$email = $_POST['Email'];
$physicalAddress = $_POST['PhysicalLocation'];

$username = $_SESSION["email"];

$data = array(
    "TPIN"=>safe_data($tpin),
    "BusinessCertificateNumber"=>safe_data($businessCert),
    "TradingName"=>safe_data($tradingName),
    "BusinessRegistrationDate"=>safe_data($businessReg),
    "MobileNumber"=>safe_data($mobileNumber),
    "Email"=>safe_data($email),
    "PhysicalLocation"=>safe_data($physicalAddress),
    "Username"=> $username,
);

function safe_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

$dd=json_encode($data);

// echo $dd;
// exit();

$res =  httpRequestPost('/Taxpayers/edit',$dd);

// echo $res;
//print_r($res);

$data_res = json_decode($res);
// print_r($data_res);
// exit();

if($data_res->Deleted==false){
    header('Location: index.php');
}else{
    //header('Location: create.php');
}