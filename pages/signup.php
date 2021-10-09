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
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="../index.php"><img id="logo-img" src="../images/homeaidlogo-green.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="../index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="categories.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="about.php">About</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <div class="acc-reg">
                            <a href="pages/signup.php"><button name="signupBtn" disabled>Sign Up</button></a>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Log In
                            </button>
                        </div>
                    </span>
                </div>
            </div>
        </nav>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign In to your HomeAid Account</h5>
                    </div>
                    <form method="POST">
                        <div class="modal-body">
                            <label>Username</label>
                            <input type="text" name="username" autocomplete="username" placeholder="Username">
                            <br>
                            <label>Password</label>
                            <input type="password" name="password" autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="subloginBtn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-body">
            <form method="POST" action="" class="signup-form">
                <div class="two-cols">
                    <div class="col1">
                        <label>First Name</label>
                        <input name="fname" type="text" placeholder="First Name" required>
                    </div>
                    <div class="col2">
                        <label>Last Name</label>
                        <input name="lname" type="text" placeholder="Last Name" required>
                    </div>
                </div>
                <label>Email Address</label>
                <input type="email" name="email" placeholder="youremail@domain.com" required>
                <label>Username</label>
                <input type="text" name="username" placeholder="Username" required>
                <div class="two-cols">
                    <div class="col1">
                        <label>Create Password</label>
                        <input type="password" name="password"  autocomplete="new-password" placeholder="Password" required>
                    </div>
                    <div class="col2">
                        <label>Confirm Password</label>
                        <input type="password" name="passcheck" autocomplete="new-password" placeholder="Confirm Password" required>
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