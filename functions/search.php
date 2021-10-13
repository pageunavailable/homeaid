<?php
    header('Content-Type: application/json');
    require("../configuration/local_config.php");

    if(isset($_GET['searchBtn'])){
        $stmt = $connection->prepare("SELECT *  FROM `hmd_pfl` WHERE `pfl_nm` LIKE \'%$searchvalue%\';");
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    echo json_encode($result);
?>