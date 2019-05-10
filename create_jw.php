<?php
include 'koneksi.php';
$lat_awal = $_POST['lat_awal'];
$lon_awal = $_POST['lon_awal'];
$lat_akhir = $_POST['lat_akhir'];
$lon_akhir = $_POST['lon_akhir'];
// $lat_awal = -7;
// $lon_awal = 112;
// $lat_akhir = -6;
// $lon_akhir = 112;

$url = file_get_contents('https://maps.googleapis.com/maps/api/directions/json?origin='.$lat_awal.','.$lon_awal.'&destination='.$lat_akhir.','.$lon_akhir.'&avoid=tolls&mode=driving&key=AIzaSyBTVcGt2fegGE6taEgiwhrQL7QWU5dgJC0');

//$insert = mysqli_query($con, "INSERT INTO jarak_waktu(jarak,waktu) VALUES('$jarak','$waktu')");

$response["jarwak"] = array();
//if ($url != null) {
	$data = json_decode($url, true);

	$jarak = $data['routes'][0]['legs'][0]['distance']['text'];
	$waktu = $data['routes'][0]['legs'][0]['duration']['text'];

	$jarwak = array();
	$jarwak["jarak"]    = $jarak;
	$jarwak["waktu"]    = $waktu;

	// push single puasa into final response array
	array_push($response["jarwak"], $jarwak);
	// successfully inserted into database
    $response["success"] = 1;
    //$response["message"] = "successfully created.";

    // echoing JSON response
    echo json_encode($response);
// } else {
//     // failed to insert row
//     $response["success"] = 0;
//     $response["message"] = "Oops! An error occurred.";

//     // echoing JSON response
//     echo json_encode($response);
// }
?>