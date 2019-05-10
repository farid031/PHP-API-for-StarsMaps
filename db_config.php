<?php
/**
 * Created by PhpStorm.
 * User: putuguna
 * Date: 22/09/17
 * Time: 21:07
 */
class Connection {
    function getConnection(){
        $host       = "localhost";
        $username   = "id9029450_faridajaa";
        $password   = "mARkamAH123";
        $dbname     = "id9029450_db_ta";
        try{
            $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch (Exception $e){
            echo $e->getMessage();
        }
    }
}