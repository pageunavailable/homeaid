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

    if(isset($_SESSION['username'])){
        echo "<script>console.log('" . $_SESSION['username'] . "');</script>";
        $accstatus = "none";
        $displayacc= "block";
    }
    else{
        $accstatus = "block";
        $displayacc = "none";
    }

?>