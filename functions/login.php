<?php
    require("../configuration/localhost.php");

    if(isset($_POST['loginBtn'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $password = hash("sha256", $pass);
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password';";
        $result = $conn->query($sql);
        if($result->num_rows != 0){
            
        }
        else{
            echo "<script>alert('Incorrect username or password. Please check your credentials and try again.')</script>";
        }
    }
?>