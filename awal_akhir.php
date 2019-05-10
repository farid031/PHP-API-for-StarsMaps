<?php

/*
 * Berikut adalah kelas untuk membaca data toko
 */

// array for JSON response
$response = array();
 
// include koneksi class
include 'koneksi.php';

$awal_result = mysqli_query ($con, "SELECT * FROM awal");
 
 // check for empty result
 if (mysqli_num_rows($awal_result) > 0) {

  $response["node_awal"] = array();
  $no = 1;
 
  while ($row = mysqli_fetch_array($awal_result)) {
   // temp user array
   $point = array();
   $point["id_node"]   = $row["id_node"];
   $point["nama_node"] = $row["nama_node"];
   $point["lat_node"]  = $row["lat_node"];
   $point["lon_node"]  = $row["lon_node"];
 
   // push single puasa into final response array
   array_push($response["node_awal"], $point);
  }

  // success
  $response["success"] = 1;
 
  // echoing JSON response
  echo json_encode($response);
 } else {
  $response["success"] = 0;
  $response["message"] = "Tidak ada data toko";
 
  // echo no users JSON
  echo json_encode($response);
 }
?>