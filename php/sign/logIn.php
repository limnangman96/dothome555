<?php
    include '../connect/connect.php';
    include '../connect/session.php';
?>

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
        <a href="#mainCont">로그인 바로가기</a>
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
        <!-- logInCont -->
        <section id="logInCont">
            <div class="logIn">
                <h1><strong>LIMJI</strong> 사이트에 오신걸 환영합니다.</h1>
                <form name="logIn" method="post" action="logInSave.php">
                    <fieldset>
                        <legend class="sr-only">로그인 영역입니다.</legend>
                        <div>
                            <label for="userEmail" class="sr-only">이메일</label>
                            <input type="email" name="userEmail" id="userEmail" class="input-text" placeholder="이메일을 적어주세요." required autofocus>
                        </div>
                        <div>
                            <label for="userPW" class="sr-only">비밀번호</label>
                            <input type="password" name="userPW" id="userPW" class="input-text" placeholder="패스워드를 적어주세요." required>
                        </div>
                        <button class="logInBtn" type="submit" value="로그인">로그인</button>
                        <p class="logInDesc">회원가입을 원하면? <a href="signUp.php">회원가입</a></p>
                    </fieldset>
                </form>
            </div>
        </section>
        <!-- //signUpCont -->
    </main>

</body>
</html>