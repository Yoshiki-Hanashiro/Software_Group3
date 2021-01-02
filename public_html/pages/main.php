<?php
    include("../template/header.php");  //echo the default Header entries
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>課題攻略サイト</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="main">
    <div class="copy-container">
        <center>
        <h1>HOME</h1>
        </center>
    </div>
    <div class="contents">
        <div class="contents-item">
        <a href = "mypage.php">
        <img src="../images/mypage.png">
        <p>マイページ</p>
        </a>
    </div>
    <div class="contents-item">
        <a href="report.php">
        <img src="../images/lecture.png">
        <p>記事一覧</p>
        </a>
    </div>
    <div class="contents-item">
        <a href="subject.php">
        <img src="../images/homework.png">
        <p>授業一覧</p>
        </a>
    </div>
    <div class="contents-item">
        <a href = "question.php">
        <img src="../images/box.png">
        <p>質問箱</p>
        </a>
    </div>
    </div>
    <div class="neartask-list">
    <h2 class="section-title">締め切りが近い課題</h2>
        <ul>
            <li>1つめの項目</li>
            <li>2つめの項目</li>
            <li>3つめの項目</li>
        </ul>
    </div>
    </div>
</body>
</html>

<?php
    include("../template/footer.php");  //echo the default Header entries
?>