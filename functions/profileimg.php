<?php
    require("../configuration/local_config.php");
    $identifier = $_SESSION['username'];
    $stmt = $connection->prepare("SELECT acc_id from hmd_acc WHERE acc_usr = '$identifier'");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $image = $result['acc_id'];
?>