<?php
    require("configuration/localhost.php");
    
    
?>

<style>
    body{
        margin: 0;

    }
    .nav-bar{
        width: 100%;
        height: 60px;
        background-color: #F8F9FA;
        position:fixed;
    }

    .main-body{
        background-color: #469D89;
        width: 100%;
        height: 100%;
    }
    .logo, .rdrct-btns{
        float: left;
    }

    .logo{
        padding-top: 8px;
        padding-left: 10px;
        margin-right: 10px;
    }
    #logo-img{
        max-width: 130px;
        height: auto;
    }
    .unv-btns{
        height: 100%;
        width: 150px;
        border:none;
        background: none;
        font-family: "Century Gothic";
        font-size: 18;
        padding-left: 2px;
        padding-right: 2px;
        border-radius: 0;
    }
    .unv-btns:hover{
        background-color:#248277;
        color: #F8F9FA;
        cursor: pointer;
    }
    .acc-reg{
        float:right;
    }
    .srch-bar{
        position: absolute;
        top: 50%;
    }
    .srch-txt{
        margin-left: 70px;
        font-size: 26;
        width: 700px;
        background-color: #F8F9FA;
        border: 1px solid #E9ECEF;
        border-radius: 5px 0px 0px 5px;
    }
    .srch-btn{
        font-size: 24;
        margin-left: -6px;
        border: none;
        height: 35;
        border-radius: 0px 5px 5px 0px;
        background-color: #99E2B4;
        color: white;
    }
    .srch-btn:hover{
        cursor: pointer;
    }
    input[type=text]:focus {outline:none;
    border: 1px solid #303A40}
</style>
<html>
    <head>
        <title>HomeAid</title>
    </head>
    <body>
        <div class="nav-bar">
            <div class="logo">
                <img id="logo-img"src="images/HomeAid_Full_Logo_Green.png">
            </div>
            <div class="rdrct-btns">
                <button class="unv-btns">Home</button>
                <button class="unv-btns">Categories</button>
                <button class="unv-btns">About</button>
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