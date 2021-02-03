<?php
    include("../template/header.php");  //echo the default Header entries
?>
<!DOCTYPE HTML>
<html lang="ja">
<body>
<div class="contact-form">
        <h2 class="section-title">投稿フォーム</h2>
        <form action="confirm.php" method="post">
        <table>
        <input name="author" placeholder="ユーザーID">
        <input name="title" placeholder="タイトル">
        </p>
        <textarea name="text" rows="10" placeholder="本文"></textarea>
        </p>
        <input class="contact-submit" type="submit" value="送信" name="btn">
</form>
</div>
<?php
session_start();
try {
    //DB名、ユーザー名、パスワード
    $dsn = 'mysql:host=localhost;dbname=software;';
    $user = 'coral';
    $password = 'coral';

    $PDO = new PDO($dsn, $user, $password); //MySQLのデータベースに接続
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //PDOのエラーレポートを表示

    $text = $_POST['text'];
    $author = $_POST['author'];
    $title = $_POST['title'];

    // データの追加
    $sql = "INSERT INTO contents(text, author, title) VALUES(:text, :author, :title)";
    $stmt = $dbh->prepare($sql);
    $params = array(':text' => $text, ':author' => $author, ':title' => $title); // 挿入する値を配列に格納する
    $stmt->execute($params); //挿入する値が入った変数をexecuteにセットしてSQLを実行
} catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
    }
    ?>
    </body>
</html>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>