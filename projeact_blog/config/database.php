<?php

global $DB;
$servername = "localhost";
$username = "root";
$password = "";
$dbname="blog_php";

try{
    $options=array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_OBJ);
    $DB = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password,$options);
    // set the PDO error mode to exception
    // echo "Connected successfully";
    return $DB;
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION,PDO::FETCH_OBJ,PDO::ATTR_DEFAULT_FETCH_MODE);
   
    
}
catch(PDOException $e){
    echo "error : ".$e;
    exit();
}






