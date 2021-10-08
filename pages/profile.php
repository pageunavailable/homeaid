<?php
    require("../configuration/localhost.php");
    if(isset($_POST['logoutBtn'])){
        session_unset();
        session_destroy();
        header("Location: ../index.php");
    }
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
                <form method="POST">
                    <button type="submit" class="unv-btns" name="logoutBtn">Logout</button>
                </form>
            </div>
        </div>
        <div class="main-body">
            
        </div>
    </body>
    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
</html>