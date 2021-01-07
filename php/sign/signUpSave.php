<html>

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
    include '../connect/connect.php';
    include '../connect/session.php';

    // echo $_POST['userEmail'], "<br />";
    // echo $_POST['userName'], "<br />";
    // echo $_POST['userNickName'], "<br />";
    // echo $_POST['userPW'], "<br />";
    // echo $_POST['birthYear'], "<br />";
    // echo $_POST['birthMonth'], "<br />";
    // echo $_POST['birthDay'], "<br />";

    $userEmail = $_POST['userEmail'];
    $userName = $_POST['userName'];
    $userNickName = $_POST['userNickName'];
    $userPW = $_POST['userPW'];
    $birthYear = $_POST['birthYear'];
    $birthMonth = $_POST['birthMonth'];
    $birthDay = $_POST['birthDay'];

    // 에러 : 경고창
    function errorAlert($alert){
        echo "<div class='errorAlert'>{$alert}<a href='signUp.php'>회원가입 다시하기</a><a href='logIn.php'>로그인 하러가기</a></div>";
        return;
    }

    // 이메일 검사
    if( !filter_Var($userEmail, FILTER_VALIDATE_EMAIL) ){
        errorAlert("올바른 이메일이 아닙니다.");
        exit;
    }

    // 이름이 한글로 구성되어 있는지 검사(정규식 검사)
    $userNamePattern = '/^[가-힣]{1,}$/';
    if( !preg_match($userNamePattern, $userName, $matches )){
        errorAlert("한글로 이루어진 이름이 아닙니다.");
        exit;
    }

    // 유효성 검사
    if( $userName == null || $userName == '' ){
        errorAlert("이름을 입력해주세요!!");
        exit;
    }
     if( $userNickName == null || $userNickName == '' ){
        errorAlert("닉네임을 입력해주세요!!");
        exit;
    }
    if( $userPW == null || $userPW == '' ){
        errorAlert("패스워드를 입력해주세요!!");
        exit;
    }
    if( $birthYear == 0 ){
        errorAlert("생일 년도를 선택해주세요!!");
        exit;
    }
    if( $birthMonth == 0 ){
        errorAlert("생일 월을 선택해주세요!!");
        exit;
    }
    if( $birthDay == 0 ){
        errorAlert("생일 날짜를 선택해주세요!!");
        exit;
    }

    $birth = $birthYear.'-'.$birthMonth.'-'.$birthDay;

    // 이메일 중복 검사
    $userEmailCheck = false;

    // sql 검사 부분
    // $userEmailCheck = true;

    $sql = "SELECT youEmail FROM myMember WHERE youEmail = '{$userEmail}'";
    $result = $dbConnect -> query($sql);

    if( $result ){
        $count = $result->num_rows;
        if( $count == 0 ){
            $userEmailCheck = true;
            // echo "youEmail X";
        } else {
            // echo "youEmail O";
            errorAlert("중복된 이메일입니다. 다시 한번 확인해주세요!");
            exit;
        } 
    } else {
        errorAlert("에러발생 : 관리자에게 문의하세요!(1)");
        exit;
    }
    

    // 닉네임 중복 검사
    $userNickNameCheck = false;

    // sql 검사 부분
    // $userNickNameCheck = true;

    $sql = "SELECT youNickName FROM myMember WHERE youNickName = '{$userNickName}'";
    $result = $dbConnect -> query($sql);

    if( $result ){
        $count = $result->num_rows;
        if( $count == 0 ){
            $userNickNameCheck = true;
            // echo "youNickName X";
        } else {
            // echo "youNickName O";
            errorAlert("중복된 닉네임입니다. 다시 한번 확인해주세요!");
            exit;
        }
    } else {
        errorAlert("에러발생 : 관리자에게 문의하세요!(2)");
        exit;
    }

    
    // 위 조건에 이상이 없으면 데이터를 입력
    if( $userEmailCheck = true && $userNickNameCheck = true ){
        $regTime = time();
        $sql = "INSERT INTO myMember(youEmail, youName, youNickName, youPW, youBirth, regTime) ";
        $sql .= "VALUES('{$userEmail}','{$userName}','{$userNickName}','{$userPW}','{$birth}',{$regTime})";
        $result = $dbConnect -> query($sql);

        if( $result ){
            $_SESSION['memberID'] = $dbConnect ->insert_id;
            $_SESSION['youNickName'] = $userNickName;
            Header("Location: ../main/index.html");
        } else {
            errorAlert("에러발생 : 관리자에게 문의하세요!(3)");
            exit;
        }
    } else {
        errorAlert("이메일 또는 닉네임이 존재합니다.");
        exit;
    }
?>
            </section>
            <!-- //mainCont -->
        </main>
</body>

</html>


