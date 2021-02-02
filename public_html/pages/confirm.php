<?php
    include("../template/header.php");  //echo the default Header entries
?>
<?php
// セッションの開始
session_start();

$title = htmlspecialchars($_POST['title'], ENT_QUOTES, 'UTF-8');
$author = htmlspecialchars($_POST['author'], ENT_QUOTES, 'UTF-8');
$text = htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8');

// 入力値をセッション変数に格納
$_SESSION['title'] = $title;
$_SESSION['author'] = $author;
$_SESSION['text'] = $text;
?>
<!DOCTYPE HTML>
<html lang="ja">
  
<head>
<meta charset="utf-8">
<title>ユーザー登録フォーム(confirm)</title>
<style>
h1 {
  margin-left: 50px;
}
th {
  width: 200px;
  margin: 10px 0;
}
input#send {
  margin-left: 100px;
  margin-top: 30px;
}
</style>
</head>

<body>
<h1>記事内容確認</h1>
<form action="submit.php" method="post">
<table>
<tr><th>著者</th><td><?php echo $author; ?></td></tr>
<tr><th>タイトル</th><td><?php echo $title; ?></td></tr>
<tr><th>記事内容</th><td><?php echo $text; ?></td></tr>
</table>
<input id="send" type="submit" value="登録">
</form>
</body>
</html>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>