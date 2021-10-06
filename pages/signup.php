<?php
    require("../configuration/localhost.php");

    if(isset($_POST['registerBtn'])){
        $name = $_POST['fname'] . " " . $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $address = $_POST['address'];
        if($email != $_POST['emailcheck']){
            echo "<script>alert('Please double check your email.')</script>";
        }
        if($pass = $_POST['passcheck']){
            $password = hash("sha256", $pass);
        }
        else{
            echo "<script>alert('Please double check your password.')</script>";
        }
        $sql = "INSERT INTO `users`(`name`, `username`, `email`, `password`, `address`) VALUES
            ('$name', '$username', '$email', '$password', '$address');";
        $result = $conn->query($sql);
    }
?>

<html>
    <head>
        <title>Registration | HomeAid</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
    </head>
    <body>
        <div class="nav-bar">
            <div class="logo">
                <a href="../index.php"><img id="logo-img"src="../images/homeaidlogo-green.png"></a>
            </div>
            <div class="rdrct-btns">
                <button class="unv-btns"><a href="../index.php">Home</a></button>
                <button class="unv-btns"><a href="categories.php">Categories</a></button>
                <button class="unv-btns"><a href="about.php">About</a></button>
            </div>
            <div class="acc-reg">
                <button class="log-in unv-btns">Log In</button>
            </div>
        </div>
    </body>
</html>