<?php
    error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE);
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    ini_set('display_errors', 0);
    require("configuration/localhost.php");
    require("functions/login.php");
?>

<html>
    <head>
        <title>HomeAid</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php"><img id="logo-img" src="images/homeaidlogo-green.png"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pages/categories.php">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="pages/about.php">About</a>
                        </li>
                    </ul>
                    <span class="navbar-text">
                        <div class="acc-reg" style="display:<?=$accstatus?>">
                            <a href="pages/signup.php"><button name="signupBtn">Sign Up</button></a>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Log In
                            </button>
                        </div>
                        <div class="btn-group" style="display:<?=$displayacc?>">
                            <button type="button" class="btn btn-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="../images/profile_pics/<?=$image?>"></image>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><button class="dropdown-item" type="button"><a href="profile.php">Profile</a></button></li>
                                <li><button class="dropdown-item" type="button">Settings</button></li>
                                <li><button class="dropdown-item" type="button" onclick="logout()">Logout</button></li>
                            </ul>
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
                            <button type="submit" class="btn btn-primary" name="loginBtn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="main-body">
        <img id="background" class="backimgpos" src="images/index_background/background.jpg"></a>
            <div class="srch-bar">
                <form method="GET">
                    <input class="srch-txt" type="text" placeholder="Find people or categories" name="search-bar">
                    <button class="srch-btn" type="submit" name="searchBtn">Search</button>
                </form>
            </div>
            
            <div id="popular-categories">
                <p><strong>Popular Categories:
                    <button type="button" onclick="category('Carpentry')"><strong>Carpentry</strong></button>
                    <button type="button" onclick="category('Housekeeping')"><strong>Housekeeping</strong></button>
                    <button type="button" onclick="category('Plumbing')"><strong>Plumbing</strong></button>
                </strong></p>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    </body>
    
    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
</html>

<script>
    function category(nm){
        var url = "pages/search.php?cat=" + nm;
        window.location.href = url;
    }
    function logout(){
        window.location.href = "functions/logout.php";
    }
</script>