<?php
    require("../configuration/localhost.php");
    require("../functions/profileimg.php");
?>

<html>
    <head>
        <title>Profile | HomeAid</title>
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <link rel="stylesheet" type="text/css" href="../css/profile.css">
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
            <div class="profile-modify center">
                <form method="POST">
                    <label>Name</label>
                    <input type="text"> <br>
                    <label>Profile Picture</label>
                    <div class="mb-3 positioning">
                        <input class="form-control form-control-sm" id="formFileSm" type="file" accept=".jpg, .png">
                    </div>
                    <label>Email Address</label>
                    <input type="email"> <br>
                    <label>Username</label>
                    <input type="text"> <br>
                    <label>Current Password</label>
                    <input type="password" name="curr-password"> <br>
                    <label>New Password</label>
                    <input type="password" name="new-pass"> <br>
                    <label>Confirm New Password</label>
                    <input type="password" name="confirm-new-pass"> <br>
                    <button type="submit" name="updateBtn">Update</button>
                </form>
            </div>
        </div>
    </body>

    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
    <!--<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>-->
</html>

<script>
    var jq = $.noConflict();
    
    function logout(){
        window.location.href = "../functions/logout.php";
    }

</script>