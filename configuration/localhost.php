<?php
    //error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    //mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    //ini_set('display_errors', 0);
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "hmd_db";

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