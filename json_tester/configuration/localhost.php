<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "homeaid";

    $conn = new PDO("mysql:host={$servername};dbname={$database};charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /*if($conn->connect_error){
        die("Connection failed - " . $conn->connect_error);
    }
    else{
        echo "<script>console.log('Database connection established.');</script>";
    }*/
?>