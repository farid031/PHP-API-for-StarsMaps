<?php
$kendaraan 	= ['Mobil', 'Motor', 'Sepeda', 'Truk', 'Bus'];
$mobil 		= ['merk' => 'Toyota', 'type' => 'Vios', 'year' => 2016];
$key1 = array_search('Vios', $mobil); // type
$key2 = array_search('Sepeda', $kendaraan); // 2
echo $key1."<br>".$key2;