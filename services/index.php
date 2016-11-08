<?php
    require_once("../database.php");
    require_once("../models/list.php");
    
    $link = db_connect();
    $services = list_all($link, "serviceslist");

    include("../views/services.php");
?>