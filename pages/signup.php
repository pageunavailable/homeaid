<?php
    require("../configuration/localhost.php");
    require("../functions/login.php");

    if(isset($_POST['registerBtn'])){
        $name = $_POST['fname'] . " " . $_POST['lname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $sql = "SELECT * FROM `users` WHERE `email` = '$email';";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo "<script>alert('This email is already in use.');</script>";
        }
        $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo "<script>alert('This username is already in use. Please use a different username.');</script>";
        }
        if($pass == $_POST['passcheck']){
            $password = hash("sha256", $pass);
        }
        else{
            echo "<script>alert('Please double check your password.')</script>";
        }
        $sql = "INSERT INTO `users`(`name`, `email`, `username`, `password`) VALUES 
        ('$name', '$email', '$username', '$password');";
        $result = $conn->query($sql);
        $_SESSION['username'] = $username;
        header("Location: profile.php");
    }
?>

<html>
    <head>
        <title>Registration | HomeAid</title>
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
    </head>
    <body>
        <div class="nav-bar">
            <div class="logo">
                <a href="../index.php"><img id="logo-img"src="../images/homeaidlogo-green.png"></a>
            </div>
            <div class="rdrct-btns">
                <a href="../index.php"><button class="unv-btns">Home</button></a>
                <a href="categories.php"><button class="unv-btns">Categories</button></a>
                <a href="about.php"><button class="unv-btns">About</button></a>
            </div>
            <div class="acc-reg">
                <button class="button:disabled" disabled>Sign Up</button>
                <button class="log-in unv-btns">Log In</button>
            </div>
        </div>
        <div class="main-body">
            <form method="POST" action="" class="signup-form">
                <div class="two-cols">
                    <div class="col1">
                        <label>First Name</label>
                        <input name="fname" type="text" placeholder="First Name">
                    </div>
                    <div class="col2">
                        <label>Last Name</label>
                        <input name="lname" type="text" placeholder="Last Name">
                    </div>
                </div>
                <label>Email Address</label>
                <input type="email" name="email" placeholder="youremail@domain.com">
                <label>Username</label>
                <input type="text" name="username" placeholder="Username">
                <div class="two-cols">
                    <div class="col1">
                        <label>Create Password</label>
                        <input type="password" name="password"  autocomplete="new-password" placeholder="Password">
                    </div>

                    <div class="col2">
                        <label>Confirm Password</label>
                        <input type="password" name="passcheck" autocomplete="new-password" placeholder="Confirm Password">
                    </div>
                </div>
                <button type="submit" name="registerBtn">Register</button>
            </form>
        </div>
    </body>
    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
</html>