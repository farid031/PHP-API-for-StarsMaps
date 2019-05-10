<?php
	/*
	 Author : www.theheran.com | info@theheran.com
	 PIN BBM: 571078A7
	*/
	include("koneksi.php");

	if(isset($_GET['mode'])){

		//cek nilai dari mode
		if($_GET['mode'] == "getDataNode"){

				$result=mysqli_query($con, "SELECT * FROM node WHERE id_node >= '315' ORDER BY nama_node ASC");
				$rows=array();
				while($row = mysqli_fetch_assoc($result)){
					$rows[]=$row;
				}
				
				if(mysqli_num_rows($result) > 0){
					//convert response to JSON format
					$data ="{values: ".json_encode($rows)."}";
					echo $data;
				}else{
					echo "nodata";
				}
		}
	}
		
?>