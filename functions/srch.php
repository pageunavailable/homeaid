<?php
    if(isset($_GET['searchBtn'])){
        $searchvalue = $_GET['search-bar'];
        header("Location: pages/search.php");
    }
?>