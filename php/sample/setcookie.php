<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
    setcookie('myCookie','cookie',time()+10000,'/');

    if(isset($_COOKIE['myCookie'])){
        echo "쿠키 생성 완료";
        echo "{$_COOKIE['myCookie']}";
    } else {
        echo "쿠키 생성 실패";
    }
?>
</body>
</html>