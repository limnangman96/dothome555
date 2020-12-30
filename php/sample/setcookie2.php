<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
        setcookie('myCookie', null, time()-1000, '/');
    
        if(isset($_COOKIE['myCookie'])){
            echo "쿠키가 존재합니다.";
        } else {
            echo "쿠키가 삭제되었습니다.";
        }
    ?>
</body>
</html>