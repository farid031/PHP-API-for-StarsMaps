<?php

$url = $_POST['url_rute'];

$data = json_decode($url, true);

$response['jarak_waktu'] = array();

$waktu = array(); 
$waktu['jarak'] = $data['routes'][0]['legs'][0]['distance']['text'];
$waktu['waktu'] = $data['routes'][0]['legs'][0]['duration']['text'];

array_push($response["jarak_waktu"], $waktu);
$response["success"] = 1;
 
// echoing JSON response
echo json_encode($response);

?>