<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set('date.timezone', 'Asia/Seoul');
        echo '1970년 1월 1일 00시 00분 00초로부터' .time(). '초가 지났습니다.';
        echo '현재 시간은' .date("Y년 m월 d일 H시 i분 s초", time());
    ?>
</body>
</html>