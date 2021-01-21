<?php
    include("../template/header.php");  //echo the default Header entries
?>
<?php
// セッションの開始
//user:root,password:root
//create table test(num int auto_increment primary key, article text, userid varchar(10));
session_start();

$userid = htmlspecialchars($_POST['userid'], ENT_QUOTES, 'UTF-8');
$article = htmlspecialchars($_POST['article'], ENT_QUOTES, 'UTF-8');

// 入力値をセッション変数に格納
$_SESSION['userid'] = $userid;
$_SESSION['article'] = $article;
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
<tr><th>ユーザーID：</th><td><?php echo $userid; ?></td></tr>
<tr><th>記事</th><td><?php echo $article; ?></td></tr>
</table>
<input id="send" type="submit" value="登録">
</form>
</body>
</html>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>