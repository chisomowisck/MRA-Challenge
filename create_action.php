<?php
include('httpCurl.php');
$tpin = $_POST['TPIN'];
$businessCert = $_POST['BusinessCertificateNumber'];
$tradingName = $_POST['TradingName'];
$businessReg = $_POST['BusinessRegistrationDate'];
$mobileNumber = $_POST['MobileNumber'];
$email = $_POST['Email'];
$physicalAddress = $_POST['PhysicalLocation'];

$data = array(
    "TPIN"=>$tpin,
    "BusinessCertificateNumber"=>$businessCert,
    "TradingName"=>$tradingName,
    "BusinessRegistrationDate"=>$businessReg,
    "MobileNumber"=>$mobileNumber,
    "Email"=>$email,
    "PhysicalLocation"=>$physicalAddress,
    "Username"=> "chisomowisck@gmail.com",
);

$dd=json_encode($data);

$res =  httpRequestPost('/Taxpayers/add',$dd);

// echo $res;
print_r($res);

$data_res = json_decode($res);
// print_r($data_res);
// exit();

if($data_res->Deleted==false){
    echo 'created';
    // header('Location: index.php');
}else{
    echo 'notcreated';
    // header('Location: create.php');
}