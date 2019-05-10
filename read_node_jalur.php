<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 22/09/17
 * Time: 23:26
 */
require_once("db_config.php");
class JsonDisplayMarker {
    function getMarkers(){
        //buat koneksinya
        $connection = new Connection();
        $conn = $connection->getConnection();
        //buat responsenya
        $response = array();
        $code = "code";
        $message = "message";
        try{
            //tampilkan semua data dari mysql
            $queryMarker = "SELECT * FROM node_jalur";
            $getData = $conn->prepare($queryMarker);
            $getData->execute();
            $result = $getData->fetchAll(PDO::FETCH_ASSOC);
            foreach($result as $data){
                array_push($response,
                    array(
                        'id_jalur'=>$data['id_jalur'],
                        'node'=>$data['node'],
                        'latitude'=>$data['latitude_jalur'],
                        'longitude'=>$data['longitude_jalur'])
                    );
            }
        }catch (PDOException $e){
            echo "Failed displaying data".$e->getMessage();
        }
        //buatkan kondisi jika berhasil atau tidaknya
        if($queryMarker){
            echo json_encode(
                array("data"=>$response,$code=>1,$message=>"Success")
            );
        }else{
            echo json_encode(
                array("data"=>$response,$code=>0,$message=>"Failed displaying data")
            );
        }
    }
}
$location = new JsonDisplayMarker();
$location->getMarkers();
?>