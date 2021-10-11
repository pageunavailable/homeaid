<?php
    require("../configuration/local_config.php");
    $identifier = $_SESSION['username'];
    $stmt = $connection->prepare("SELECT profile from users WHERE username = '$identifier'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $image = $result['profile'];
?>