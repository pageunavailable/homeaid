<?php
    if(isset($_GET['searchBtn'])){
        $searchvalue = $_GET['search-bar'];
        $url = "search.php?cat=".$searchvalue;
        header("Location: pages/$url");
    }
    if(isset($_GET['subsearchBtn'])){
        $searchvalue = $_GET['search-bar'];
        $url = "search.php?cat=".$searchvalue;
        header("Location: $url");
    }
?>