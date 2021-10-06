<?php
    require("configuration/localhost.php");
    require("functions/login.php");
    session_start();
    //$_SESSION['username'] = "";
?>

<html>
    <head>
        <title>HomeAid</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>
        <div class="nav-bar">
            <div class="logo">
                <a href="index.php"><img id="logo-img"src="images/homeaidlogo-green.png"></a>
            </div>
            <div class="rdrct-btns">
                <a href="index.php"><button class="unv-btns">Home</button></a>
                <a href="pages/categories.php"><button class="unv-btns">Categories</button></a>
                <a href="pages/about.php"><button class="unv-btns">About</button></a>
            </div>
            <div class="acc-reg">
                <a href="pages/signup.php"><button class="sign-up unv-btns">Sign Up</button></a>
                <button class="log-in unv-btns">Log In</button>
            </div>
        </div>
        <div class="main-body">
            <div class="srch-bar">
                <form method="GET">
                    <input class="srch-txt" type="text" placeholder="Find Your Service">
                    <input class="srch-btn" type="submit" value="Search">
                </form>
            </div>
        </div>
    </body>
    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
</html>