<?php
    header('Content-Type: application/json');
    require("../configuration/local_config.php");

    $stmt = $connection->prepare("SELECT * FROM hmd_ctg");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
?>