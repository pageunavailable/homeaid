<?php
    require("configuration/localhost.php");
    
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
                        <div class="acc-reg">
                            <button class="sign-up unv-btns">Sign Up</button>
                            <button class="log-in unv-btns">Log In</button>
                        </div>
                    </span>
                </div>
            </div>
        </nav>

        <div class="main-body">
            <div class="srch-bar">
                <form method="GET">
                    <input class="srch-txt" type="text" placeholder="Find people or categories">
                    <input class="srch-btn" type="submit" value="Search">
                </form>
            </div>
        </div>
    </body>
</html>