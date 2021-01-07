<?php
    include '../connect/connect.php';
    include '../connect/session.php';
    include '../connect/checkSession.php';
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
        <a href="#mainCont">콘텐츠 바로가기</a>
    </div>
    <!-- //skip  -->
    <!--  header -->
    <header id="header">
        <?php
            include '../component/header.php';
        ?>
    </header>
    <!--  //header  -->
   
    <main>
        <!-- mainCont -->
        <!-- <section id="mainBoardCont">
            <div class="container">
                <div class="mainBoard">
                    <h2>무엇이든지 물어보세요!</h2>
                    <div class="topMenu">
                        <div>
                            <input type="text" name="inputSearch" id="inputSearch" class="inputSearch" placeholder="검색어를 입력하세요!">
                        </div>
                        <span class="alignBtn"><a href="#">제목　　　</a></span>
                        <span class="searchBtn"><a href="#">검색</a></span>
                        <span class="writeBtn"><a href="#">글쓰기</a></span>
                    </div>
                    <div class="listBox">
                        <ul>
                            <li>번호</li>
                            <li>제목</li>
                            <li>등록자</li>
                            <li>등록일</li>
                        </ul>
                        <ul>
                            <li>1</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>2</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>3</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>4</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>5</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>6</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>7</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>8</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>9</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>10</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>11</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                        <ul>
                            <li>12</li>
                            <li><a href="#">포트폴리오 사이트는 어떻게 만드나요?</a></li>
                            <li>Lim Jiwon</li>
                            <li>2021-01-06 13:00</li>
                        </ul>
                    </div>
                    <div class="pageBtn">
                        <span><a class="active" href="#">1</a></span>
                        <span><a href="#">2</a></span>
                        <span><a href="#">3</a></span>
                        <span><a href="#">4</a></span>
                        <span><a href="#">5</a></span>
                        <span><a href="#">6</a></span>
                        <span><a href="#">〉</a></span>
                        <span><a href="#">》</a></span>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- //mainCont -->

        <!-- mainCont -->
        <section id="boardCont">
            <div class="container">
                <div class="listBoard">
                    <h2>무엇이든지 물어보세요!</h2>
                    <div class="listSearch">
                        <form name="tableSeach" method="post" actions="searchResult.php">
                            <fieldset>
                                <legend class="sr-only">게시판 검색 영역입니다.</legend>
                                <input type="search" name="searchKeyword" class="form-search" placeholder="검색어를 입력하세요!" aria-label="search" />
                                <select name="searchOption" id="searchOption" class="form-select">
                                    <option value="title">제목</option>
                                    <option value="content">내용</option>
                                    <option value="tandc">제목과 내용</option>
                                    <option value="torc">제목 또는 내용</option>
                                </select>
                                <button type="submit" class="form-btn">검색</button>
                                <a class="form-btn black" href="writeBoard.php">글쓰기</a>
                            </fieldset>
                        </form>
                    </div>
                    <!-- //listSearch -->
                    <div class="listTable">
                        <table class="table">
                            <colgroup>
                                <col style="width: 10%">
                                <col style="width: 65%">
                                <col style="width: 10%">
                                <col style="width: 15%">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>번호</th>
                                    <th>제목</th>
                                    <th>등록자</th>
                                    <th>등록일</th>
                                </tr>
                            </thead>
                            <tbody>

                    <?php
                        if( isset($_GET['page']) ){
                            $page = (int) $_GET['page'];
                        } else {
                            $page = 1;
                        }

                        $numView = 20;
                        $viewLimit = ($numView * $page) - $numView;

                        $sql = "SELECT b.boardID, b.boardTitle, m.youNickName, b.regTime FROM myBoard b JOIN myMember m ON (m.memberID = b.memberID) ORDER BY boardID ";
                        $sql .= "ASC LIMIT {$viewLimit}, {$numView}"; 
                        //    $sql .= "LIMIT 0, 20";   //(20 * 1) - 20  --> {$numView * $page} - $numView
                        //    $sql .= "LIMIT 20, 20";  //(20 * 2) - 20  --> {$numView * $page} - $numView
                        //    $sql .= "LIMIT 40, 20";  //(20 * 3) - 20  --> {$numView * $page} - $numView
                      
                        $result = $dbConnect -> query($sql);

                        if( $result ){
                            $dataCount = $result ->num_rows;

                            for( $i=0; $i<=$dataCount; $i++ ){
                                $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                                echo "<tr>";
                                echo "<td>".$memberInfo['boardID']."</td>";
                                echo "<td>".$memberInfo['boardTitle']."</td>";
                                echo "<td>".$memberInfo['youNickName']."</td>";
                                echo "<td>".date('Y-m-d- H:i', $memberInfo['regTime'])."</td>";
                                echo "</tr>";
                            } 
                        } else {
                            echo "<tr><td colspan='4'>게시글이 없습니다.</td></tr>";
                        }
                    ?>
                                <!-- <tr>
                                    <td>1</td>
                                    <td>안녕하세요</td>
                                    <td>임낭만</td>
                                    <td>2021-01-07</td>
                                </tr> -->
                            </tbody>
                        </table>
                    </div>
                    <!-- //listTable -->
                    <!-- pagination -->
                        <?php
                            include 'pagination.php';
                        ?>
                    <!-- //pagination -->
                </div>
            </div>
        </section>
        <!-- //mainCont -->
    </main>
</body>
</html>