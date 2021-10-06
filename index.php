<?php
    require("configuration/localhost.php");   

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
                <button class="unv-btns"><a href="index.php">Home</a></button>
                <button class="unv-btns"><a href="pages/categories.php">Categories</a></button>
                <button class="unv-btns"><a href="pages/about.php">About</a></button>
            </div>
            <div class="acc-reg">
                <button class="sign-up unv-btns">Sign Up</button>
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
</html>