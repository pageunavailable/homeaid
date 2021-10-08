<?php
    require("configuration/localhost.php");
    require("functions/login.php");
?>

<html>
    <head>
        <title>HomeAid</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                <button type="button" class="log-in unv-btns" data-toggle="modal" data-target="#exampleModal">Log In</button>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sign In to your HomeAid Account</h5>
                    </div>
                    <form method="POST" action="">
                        <div class="modal-body">
                            <label>Username</label>
                            <input type="text" name="username" placeholder="Username">
                            <br>
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary" name="loginBtn">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="main-body">
            <div class="srch-bar">
                <form method="GET" class="search-area">
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