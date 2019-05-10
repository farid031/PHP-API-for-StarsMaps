<?php
 

/*
 * Berikut adalah kelas untuk meng-update data mahasiswa
 */
include 'koneksi.php';

// array for JSON response
$response = array();
 
// check for required fields
if (isset($_POST['tujuan']) && isset($_POST['latitude']) && isset($_POST['longitude'])) {
 
    //$fromClass = $_POST['asal'];
    $toClass = $_POST['tujuan'];
    $lat_asal = $_POST['latitude'];
    $lon_asal = $_POST['longitude'];

    $node_akhir = mysqli_query($con, "SELECT * FROM node WHERE id_node = '$toClass'");
    while ($isi = $node_akhir->fetch_object()) {
            $nama_node  = $isi->nama_node;
            $lat        = $isi->latitude;
            $lon        = $isi->longitude;
      }

    mysqli_query($con, "UPDATE akhir SET nama_node='$nama_node', lat_node='$lat', lon_node='$lon' WHERE id_node='akhir'");

    $query = mysqli_query($con, "UPDATE temp_table SET lat_temp='$lat_asal', lon_temp='$lon_asal', tujuan_temp='$toClass' WHERE id_temp='jarak'");
 
    // check if row inserted or not
    if ($query) {
        // successfully updated
        $response["success"] = 1;
        $response["message"] = "inputan diterima";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        $response["success"] = 0;
        $response["message"] = "inputan tidak diterima";
 
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "isi semua form isian";
 
    // echoing JSON response
    echo json_encode($response);
}
?>