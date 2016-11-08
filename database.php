<?php
define('MYSQL_SERVER', '127.0.0.1:3306');
define('MYSQL_USER', 'alexandr_ov');
define('MYSQL_PASSWORD', 'relksfY7i');
define('MYSQL_DB', 'alexandrov');

function db_connect() {
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
    if (!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysqli_error($link));
    }
    return $link;
}

?>