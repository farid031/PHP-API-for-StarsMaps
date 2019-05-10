<?php
	define('DB_USER', "id9029450_faridajaa"); // User database
	define('DB_PASSWORD', "mARkamAH123"); // Password database
	define('DB_DATABASE', "id9029450_db_ta"); // Nama database
	define('DB_SERVER', "localhost"); // Server database

	// Koneksi ke database
	$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die('Unable to connect');
?>