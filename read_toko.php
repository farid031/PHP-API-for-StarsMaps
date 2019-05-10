<?php

/*
 * Berikut adalah kelas untuk membaca data toko
 */

// array for JSON response
$response = array();
 
// include koneksi class
include 'koneksi.php';
 
$sql = "SELECT * FROM toko";
$toko_result = mysqli_query ($con, $sql); //run the query
 
 // check for empty result
 if (mysqli_num_rows($toko_result) > 0) {

  $response["toko"] = array();
  $no = 1;
 
  while ($row = mysqli_fetch_array($toko_result)) {
   // temp user array
   $toko = array();
   $toko["no"]        = $no++;
   $toko["str_id"]    = $row["str_id"];
   $toko["nama"]      = $row["nama"];
   $toko["alamat"]    = $row["alamat"];
   $toko["kabupaten"] = $row["kabupaten"];
   $toko["provinsi"]  = $row["provinsi"];
   $toko["latitude"]  = $row["latitude"];
   $toko["longitude"] = $row["longitude"];
   $toko["sms"]       = $row["sms"];
 
   // push single puasa into final response array
   array_push($response["toko"], $toko);
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