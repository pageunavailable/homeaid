<?php
    require("../configuration/localhost.php");
    require("../functions/login.php");
    require("../configuration/local_config.php");
?>

<html>
    <head>
        <title>Categories | HomeAid</title>
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
                    <span class="navbar-text">
                        <div class="acc-reg">
                            <a href="signup.php"><button name="signupBtn">Sign Up</button></a>
                            <button type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Log In
                            </button>
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
                            <button type="submit" class="btn btn-primary" name="subloginBtn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="main-body">
            <div class="card-group" id="card-body">
                
            </div>
        </div>
    </body>

    <footer>
        <p>© October 2021 - The Mischiefs</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</html>

<script>
    var jq = $.noConflict();
    Load();
    function Load(){
        jq('#card-body').empty();
        jq.ajax({
            url: "http://localhost/myapp/json_tester/functions/list.php",
            type: "GET",
            success: function(response){
                response.forEach(function(categories, index){
                    jq('#card-body').append(`
                        <div class="card center" style="width: 18rem;">
                            <div class="cardimage">
                                <img src='${categories.image}' class="card-img-top">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">${categories.category_name}</h5>
                                <p class="card-text">${categories.description}</p>
                                <a href="#" class="btn btn-tertiary">Go</a>
                            </div>
                            <div class="card-footer text-muted">
                                Users Available: 
                            </div>
                        </div>
                    `);
                });
            }
        });
    }
</script>