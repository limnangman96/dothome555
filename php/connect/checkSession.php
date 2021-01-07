<?php
    if( !isset($_SESSION['memberID']) ){
        Header('Location:../main/error.html');
        exit;
    }
?>