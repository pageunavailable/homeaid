<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "homeaid";

    $connection = new PDO("mysql:host={$servername};dbname={$database};charset=utf8", $username, $password);
    $connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>