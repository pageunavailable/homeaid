<?php
    $identifier = $_SESSION['username'];
    $sql = "SELECT profile from `users` WHERE `username` = $identifier";
    $image = $conn->query($sql);
    
?>