<?php
    $host = "localhost";
    $user = "dnjsdl678";
    $pw = "QlqjS4747!";
    $dbName = "dnjsdl678";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
//        echo "database connect true";
    }
?>