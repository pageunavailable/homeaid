<?php
    header('Content-Type: application/json');
    include("../configuration/local_config.php");

    $user = $_SESSION['username'];

    $stmt = $connection->prepare("SELECT * FROM users WHERE `username` = '$user'");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
?>