<?php
    header('Content-Type: application/json');
    include("../configuration/localhost.php");

    $stmt = $conn->prepare("SELECT * FROM categories");
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
?>