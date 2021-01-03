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
      $db = new PDO('mysql:host=localhost; dbname=sample','coral','ukU3urEb');
      $sql = 'select count(*) from users where username=? and password=?';
      $stmt = $db->prepare($sql);
      $stmt->execute(array($username,$password));
      $result = $stmt->fetch();
      $stmt = null;
      $db = null;
  //ログイン認証ができたときの処理
      if ($result[0] != 0){
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

<table width=98%>
  <tr width=100% height="360px">
    <td width=50%>
      <form name="form1" action="" method="post">
        <table width="15">
          <tr width="15"><td width="100">ユーザーID：</td><td><input type="text" name="username" size="15" ></td></tr>
          <tr width="15"><td width="100">パスワード：</td><td><input type="text" name="password" size="15"></td></tr>
          <tr width="10"><td width="85"><input type="submit" name = "login" value="ログイン"></td><td></td></tr>
          <tr width="10"><td width="85"><input type="button" onclick="location.href='pages/signin.php'" value="新規登録"></td><td></td></tr>
          <tr width="10"><td width="85"><input type="button" onclick="location.href='pages/post.php'" value="記事投稿ページ"></td><td></td></tr>
          <tr width="10"><td width="85"><input type="button" onclick="location.href='pages/main.php'" value="メインページ"></td><td></td></tr>
        </table>
      </form>
    </td>
  </tr>
</table>
  
  <?php
    include("template/footer.php");
  ?>