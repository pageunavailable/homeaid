<?php
    if(isset($_POST['loginBtn'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $password = hash("sha256", $pass);
        $sql = "SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password';";
        $result = $conn->query($sql);
        if($result->num_rows != 0){
            //$_SESSION['username'] = $username;
            echo "<script>console.log('Login success');</script>";
        }
        else{
            echo "<script>alert('Incorrect username or password. Please check your credentials and try again.');</script>";
        }
    }
?>