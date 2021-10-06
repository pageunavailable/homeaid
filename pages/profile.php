<?php
    require("../configuration/localhost.php");
    require("../functions/login.php");
?>

<html>
    <head>
        <title>Profile | HomeAid</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
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
                <a href="signup.php"><button class="sign-up unv-btns">Sign Up</button></a>
                <button class="log-in unv-btns">Log In</button>
            </div>
        </div>
        <div class="main-body">
            
        </div>
    </body>
    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
</html>