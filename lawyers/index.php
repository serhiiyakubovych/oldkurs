<?php
    require_once("../database.php");
    require_once("../models/list.php");
    
    $link = db_connect();
    $lawyers = list_all($link, "lawyerslist");

    include("../views/lawyers.php");
?>