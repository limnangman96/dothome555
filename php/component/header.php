<div class="site"><a href="main/site.html">Site</a></div>
<div class="logo"><a href="../main/index.html">LIMJI</a></div>
<nav class="nav">
   <ul>
        <?php if( isset($_SESSION['memberID']) ){ ?>
            <li class="active"><?=$_SESSION['youNickName'] ?>님 환영합니다.</li>
            <li><a href="../sign/logOut.php">로그아웃</a></li>
        <?php } else { ?>
            <li><a href="../sign/signUp.php">회원가입</a></li>
            <li><a href="../sign/logIn.php">로그인</a></li>
        <?php } ?>
        <li><a href="../board/board.php">게시판</a></li>
   </ul>
    <ul>
        <li><a href="about.html">About</a></li>
        <li><a href="reference.html">Reference</a></li>
        <li><a href="script.html">Script</a></li>
        <li><a href="animation.html">Animation</a></li>
        <li><a href="contact.html">Contact</a></li>
    </ul>
</nav>
<!-- header -->