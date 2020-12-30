<?php
    include '../connect/connect.php';

    $sql = "create table myMember(";
    $sql .= "memberID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "youEmail varchar(40) UNIQUE NOT NULL,";
    $sql .= "youName varchar(10) NOT NULL,";
    $sql .= "youNickName varchar(10) NOT NULL,";
    $sql .= "youPW varchar(20) DEFAULT NULL,";
    $sql .= "youBirth varchar(10) NOT NULL,";
    $sql .= "regTime int(11) NOT NULL,";
    $sql .= "PRIMARY KEY(memberID)";
    $sql .= ") CHARSET=utf8";

    $result = $dbConnect -> query($sql);

    if($result){
        echo "Create Table Complete";
    } else {
        echo "Create Table False";
    }
?>