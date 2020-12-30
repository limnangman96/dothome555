<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
    
        //세션 생성
        $_SESSION['userID'] = 'dnjsdl678';
        
        if(isset($_SESSION['userID'])){
            echo "세션이 생성되었습니다.";
            echo "{$_SESSION['userID']}";
        } else {
            echo "세션 생성에 실패하였습니다.";
        }
    ?>
</body>
</html>