<?php
clearstatcache();
if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $dsn = 'mysql:host=localhost;dbname=sample;';
  try {
      $db = new PDO($dsn, 'coral', 'ukU3urEb');
      $sql = 'insert into users(username, password) values(?, ?)';
      $stmt = $db->prepare($sql);
      $stmt->execute(array($username, $password));
      $stmt = null;
      $db = null;
  } catch (PDOExeption $e) {
      //echo $e->getMessage();
      exit;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>ログイン機能</title>
</head>
<body>

<h1>ログイン機能</h1>
<form action="" method="POST">
  ユーザ名<input type="text" name="username" value=""><br>
  パスワード<input type="password" name="password" value=""><br>
  <input type="submit" name="signin" value="新規登録">
  <tr width="10"><td width="85"><input type="button" onclick="location.href='../index.php'" value="ログイン画面"></td><td></td></tr>

  </form>
  
  </body>
</html>
