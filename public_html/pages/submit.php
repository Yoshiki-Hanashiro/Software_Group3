<?php
    include("../template/header.php");  //echo the default Header entries
?>
<?php
session_start();

$userid = htmlspecialchars($_SESSION['userid'], ENT_QUOTES, 'UTF-8');
$article = htmlspecialchars($_SESSION['article'], ENT_QUOTES, 'UTF-8');
// 接続設定
$user = 'root';
$pass = 'root';

// データベースに接続
$dsn = 'mysql:host=localhost;dbname=test;charset=utf8';
$conn = new PDO($dsn, $user, $pass); //「$conn」は、任意のオブジェクト名

// データの追加
$sql = 'INSERT INTO test (article, userid) VALUES("'.$article.'", "'.$userid.'")';
$stmt = $conn -> prepare($sql);
$stmt -> execute();
?>
<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ユーザー登録フォーム・登録ページ</title>
<style>
p {
  margin-left: 50px;
}
</style>
</head>

<body>
<p>登録完了しました。</p>
<p><a href="post.php">記事投稿画面へ</a></p>　　　　　<p><a href="report.php">記事一覧へ</a></p>
</body>
</html>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>