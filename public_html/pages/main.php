<?php
    include("../template/header.php");  //echo the default Header entries
?>
<div class="main">
    <div class="copy-container">
        <center>
        <h1>HOME</h1>
        </center>
    </div>
    <div class="contents">
        <div class="contents-item">
            <a href = "mypage.php">
            <img src="../images/mypage.png" class="main">
            </a>
            <p>マイページ</p>
        </div>
        <div class="contents-item">
            <a href="report.php">
            <img src="../images/homework.png" class="main">
            </a>
            <p>記事一覧</p>
        </div>
        <div class="contents-item">
            <a href="subject.php">
            <img src="../images/lecture.png" class="main">
            </a>
            <p>授業一覧</p>
        </div>
        <div class="contents-item">
            <a href = "post.php">
            <img src="../images/box.png" class="main">
            </a>
            <p>記事投稿</p>
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

<?php
    include("../template/footer.php");  //echo the default Header entries
?>