<?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "homeaid";

    $conn = new mysqli($servername, $username, $password, $database);

    if($conn->connect_error){
        die("Connection failed - " . $conn->connect_error);
    }
    else{
        echo "<script>console.log('Database connection established.');</script>";
    }

    if($_SESSION['username'] == null || $_SESSION['loggedon'] == null){
        $accstatus = "";
    }
    else{
        $accstatus = "hide";
    }
?>