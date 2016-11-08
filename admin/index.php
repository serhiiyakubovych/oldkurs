<?php
    require_once("../database.php");
    require_once("../models/list.php");

    $link = db_connect();
    
    if (isset($_GET['action']) && isset($_GET['table'])) {
        $action = $_GET['action'];
        $table = $_GET['table'];
    }
    else {
        $action = '';
        $table = '';
    }

    if ($table === 'serviceslist' && !empty($action)) {
        if ($action == "add"){
            if (!empty($_POST))
            {
                list_new($link, $table, $_POST['img_address'], $_POST['title'], $_POST['content']);
                header("Location: index.php");
            }
            $service = ['img_address' => '', 'title' => '', 'content' => ''];
            include("../views/edit_admin.php");
        }
        else if ($action == "edit") {
            if (!isset($_GET['id']))
                header("Location: index.php");
            $id = (int)$_GET['id'];
            if (!empty($_POST) && $id > 0){
                list_edit($link, $table, $id, $_POST['img_address'], $_POST['title'], $_POST['content']);
                header("Location: index.php");
            }

            $service = list_get($link, $table, $id);
            include("../views/edit_admin.php");
        }
        else if ($action == "delete"){
            if (!isset($_GET['id']))
                header("Location: index.php");
            $id = (int)$_GET['id'];
            list_delete($link, $table, $id);
            header("Location: index.php");
        }
    } else if ($table === 'lawyerslist' && !empty($action)) {
        if ($action == "add"){
            if (!empty($_POST))
            {
                list_new($link, $table, $_POST['name'], $_POST['position'], $_POST['email']);
                header("Location: index.php");
            }
            $lawyer = ['name' => '', 'position' => '', 'email' => ''];
            include("../views/edit_admin.php");
        }
        else if ($action == "edit") {
            if (!isset($_GET['id']))
                header("Location: index.php");
            $id = (int)$_GET['id'];
            if (!empty($_POST) && $id > 0){
                list_edit($link, $table, $id, $_POST['name'], $_POST['position'], $_POST['email']);
                header("Location: index.php");
            }

            $lawyer = list_get($link, $table, $id);
            include("../views/edit_admin.php");
        }
        else if ($action == "delete"){
            if (!isset($_GET['id']))
                header("Location: index.php");
            $id = (int)$_GET['id'];
            list_delete($link, $table, $id);
            header("Location: index.php");
        }
    } else {
        $lawyers = list_all($link, "lawyerslist");
        $services = list_all($link, "serviceslist");
        include("../views/list_admin.php");
    }
?>