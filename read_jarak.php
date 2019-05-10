<?php

/*
 * Berikut adalah kelas untuk membaca data toko
 */

// array for JSON response
$response = array();
 
// include koneksi class
include 'koneksi.php';

$jarak_result = mysqli_query ($con, "SELECT * FROM jarak_node WHERE id_jarak = 'jarak'"); //run the query
 
 // check for empty result
 if (mysqli_num_rows($jarak_result) > 0) {

  $response["jarak"] = array();
 
  while ($row = mysqli_fetch_array($jarak_result)) {
   // temp user array
   $toko = array();
   $toko["jarak"]    = $row["jarak"];
 
   // push single puasa into final response array
   array_push($response["jarak"], $toko);
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