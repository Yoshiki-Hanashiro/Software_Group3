<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>課題攻略サイト</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Language" content="ja" />
    <meta name="viewport" id="iphone-viewport" content="width=480, user-scalable=yes, maximum-scale=0.6667" />
    <meta name=”viewport” content=”width=device-width,initial-scale=1.0″>
    <link rel = "stylesheet" type = "text/css" href = "../css/style.css">
    <script Langage="JavaScript">
      function client_resizeTo(520, 480) {
      　　if (document.layers) {
      　　　　window.resizeTo(width, height);
      　　　　window.resizeTo(width, height);
      　　} else if (document.body.clientWidth) {
      　　　　window.resizeTo(width*2, height*2);
      　　　　var client_width = document.body.clientWidth;
      　　　　var client_height = document.body.clientHeight;
      　　　　window.resizeTo(width*3-client_width, height*3-client_height);
      　　}
      }
    </script>
  </head>
  <body onload="createImageLayer();">
    <a name="top"></a>
    <div class="header">
      <div class="header-logo">
          <h1><font size="10">課題攻略サイト</font><font size = "5"></font></h1>
      </div>
    </div>
<?php
  clearstatcache();
  $err_msg = "";

  //サブミットボタンが押されたときの処理
  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  //データが渡ってきた場合の処理
    try {
      $db = new PDO('mysql:host=localhost; dbname=sample; charset=utf8','coral','ukU3urEb');
      $sql = 'select password from users where username= :user;';
      $stmt = $db->prepare($sql);
      $stmt->bindParam(':user',$username);
      $stmt->execute();
      $result = $stmt->fetch();
  //ログイン認証ができたときの処理
      if (password_verify($password, $result['password'])){
        $err_msg = "ログインしました"; //ログイン成功時ページ移動できるが今は保留
        echo $username;
        echo "で";
        echo $err_msg;
        header('Location:/pages/main.php');
        exit();
  //アカウント情報が間違っていたときの処理
      }else{
        $err_msg = "アカウント情報が間違っています。";
        echo $err_msg;
      }
  //データが渡って来なかったときの処理
    }catch (PDOExeption $e) {
      echo $e->getMessage();
      exit;
    }
}
?>

<form name="form1" action="" method="post">
<div class = "log-in">
    <p>ログインしてください</p>
    <div class="cp_iptxt">
        <input type="text" name="username" size="15" placeholder="user ID" class="login-input">
    </div>
    <div class="cp_iptxt">
        <input type="text" name="password" size="15" placeholder="password" class="login-input">
    </div>
      <input type="submit" name = "login" value="ログイン" class="button">
</div>
<div class = "log-in">
    <p>登録がまだの方はこちらから</p>
    <input type="button" onclick="location.href='pages/signin.php'" value="新規登録" class="button">
</div>
</form>
  
  <?php
    include("template/footer.php");
  ?>