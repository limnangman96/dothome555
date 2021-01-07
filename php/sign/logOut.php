<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="webstoryboy">
    <meta name="description" content="웹스토리보이 포트폴리오 사이트입니다.">
    <meta name="keywords" content="웹표준, 웹접근성, 사이트만들기, 포트폴리오, 웹스토리보이">
    <title>LIMJI Portfolio</title>
    
    <!-- CSS Style -->
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
    <!-- webfonts -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
</head>
<body>

    <!-- skip  -->
    <div id="skip">
            <a href="#mainCont">콘텐츠 바로가기</a>
        </div>
        <!-- //skip  -->
        <!--  header -->
        <header id="header" class="black">
            <?php
                include '../component/header.php';
            ?>
        </header>
        <!--  //header  -->
    
        <main>
            <!-- mainCont -->
            <section id="mainCont">

<?php
    include '../connect/session.php';

    unset($_SESSION['memberID']);
    unset($_SESSION['youNickName']);

    echo "<div class='errorAlert'>로그아웃 되었습니다.<a href='../main/index.html'>메인 페이지 이동하기</a></div>";
    return;
?>

            </section>
            <!-- //mainCont -->
        </main>
</body>
</html>


