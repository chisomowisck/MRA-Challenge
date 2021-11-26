<?php
include('httpCurl.php');

$email = $_POST['Email'];
$password = $_POST['Password'];
if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
    $_SESSION['error_email'] = $emailErr;
    header('Location: ../login.php');
 }elseif (empty($_POST["Password"])) {
    $emailErr = "Password is required";
    $_SESSION['error_email'] = $emailErr;
    header('Location: ../login.php');
 }else {
    $emaill = safe_data($_POST["email"]);

    // check if e-mail address is well-formed
    if (!filter_var($emaill, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
       $_SESSION['error_email'] = $emailErr;
       header('Location: ../login.php');
    }
 }
$data = array(
    "Email"=>safe_data($email),
    "Password"=>safe_data($password)
);

function safe_data($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
 }

$dd=json_encode($data);

$res =  httpRequestPost('/auth/login',$dd);


 echo $res;

$data_res = json_decode($res);
// print_r($data_res);
// exit();
$_SESSION["email"] = $data_res->Token->Name;



if($data_res->Authenticated=='1'){
    
    header('Location: index.php');
}else{
    $emailErr = "Sorry email or password is not correct"; 
    $_SESSION['error_email'] = $emailErr;
    header('Location: login.php');
}