<?php
session_start();
$email = $_SESSION["email"];
$apikey = "3fdb48c5-336b-47f9-87e4-ae73b8036a1c";
$base_url = "https://www.mra.mw/sandbox/programming/challenge/webservice";
function httpRequestGet($endPoint)
{
global $base_url;
global $email;
global $apikey;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url.$endPoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_SSL_VERIFYPEER=>false,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'apikey: '.$apikey,
    'candidateid: '.$email,
  ),
));


$response = curl_exec($curl);

curl_close($curl);
return $response;
}

function httpRequestPost($endPoint,$data){
    global $base_url;
    global $email;
    global $apikey;
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $base_url.$endPoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_SSL_VERIFYPEER=>false,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'apikey: '.$apikey,
    'candidateid: '.$email,
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

return $response;

}




?>