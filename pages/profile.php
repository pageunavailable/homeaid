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
                    <span class="navbar-text logout">
                        <div class="acc-reg">
                            <form method="POST">
                                <button name="logoutBtn">Logout</button>
                            </form>
                        </div>
                    </span>
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