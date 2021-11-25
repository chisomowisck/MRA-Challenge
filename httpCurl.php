<?php
$base_url = "https://www.mra.mw/sandbox/programming/challenge/webservice";
function httpRequestGet($endPoint)
{
    global $base_url;
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => $base_url.$endPoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
    'candidateid: chisomowisck@gmail.com'
  ),
));


$response = curl_exec($curl);

curl_close($curl);
return $response;
}

function httpRequestPost($endPoint,$data){
    global $base_url;
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => $base_url.$endPoint,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $data,
  CURLOPT_HTTPHEADER => array(
    'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
    'candidateid: chisomowisck@gmail.com',
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
return $response;

}

function httpRequestLogin($endPoint,$data){
    global $base_url;
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $base_url.$endPoint,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'POST',
      CURLOPT_POSTFIELDS =>$data,
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;

}

function httpRequestDelete($endPoint,$data){
  global $base_url;
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $base_url.$endPoint,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
    CURLOPT_HTTPHEADER => array(
      'apikey: 3fdb48c5-336b-47f9-87e4-ae73b8036a1c',
      'candidateid: chisomowisck@gmail.com',
      'Content-Type: application/json'
    ),
  ));
  
  $response = curl_exec($curl);
  
  curl_close($curl);
  echo $response;

}


?>