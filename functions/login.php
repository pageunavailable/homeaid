<?php
    if(isset($_POST['loginBtn'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $password = hash("sha256", $pass);
        $sql = "SELECT * FROM `hmd_acc` WHERE `acc_usr` = '$username' AND `acc_pwd` = '$password';";
        $result = $conn->query($sql);
        if($result->num_rows != 0){
            $_SESSION['username'] = $username;
            echo "<script>console.log('Login success');</script>";
            header("Location: pages/profile.php");
        }
        else{
            echo "<script>alert('Incorrect username or password. Please check your credentials and try again.');</script>";
        }
    }
    if(isset($_POST['subloginBtn'])){
        $username = $_POST['username'];
        $pass = $_POST['password'];
        $password = hash("sha256", $pass);
        $sql = "SELECT * FROM `hmd_acc` WHERE `acc_usr` = '$username' AND `acc_pwd` = '$password';";
        $result = $conn->query($sql);
        if($result->num_rows != 0){
            $_SESSION['username'] = $username;
            echo "<script>console.log('Login success');</script>";
            header("Location: profile.php");
        }
        else{
            echo "<script>alert('Incorrect username or password. Please check your credentials and try again.');</script>";
        }
    }
?>