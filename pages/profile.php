<?php
    require("../configuration/localhost.php");
    require("../functions/profileimg.php");
?>

<html>
    <head>
        <title>Profile | HomeAid</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
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
                    <div class="btn-group">
                        <button type="button" class="btn btn-tertiary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../images/profile_pics/<?=$image?>"></image>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><button class="dropdown-item" type="button"><a href="profile.php">Profile</a></button></li>
                            <li><button class="dropdown-item" type="button">Settings</button></li>
                            <li><button class="dropdown-item" type="button" onclick="logout()">Logout</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <div class="main-body">
            
        </div>
    </body>

    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
</html>

<script>
    function logout(){
        window.location.href = "../functions/logout.php";
    }
</script>