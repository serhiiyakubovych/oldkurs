<?php    
    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = '';

    if ($action == "send"){
        if (!empty($_POST))
        {
            mail("alexandrov@alexandrovandco.adr.com.ua", trim($_POST['subject']), trim($_POST['message']));
            header("Location: index.php");
        }
        include("../views/contacts.php");
    } else {
        include("../views/contacts.php");
    }
?>