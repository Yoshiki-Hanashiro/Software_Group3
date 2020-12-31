<?php
  include("template/header.php");  //echo the default Header entries
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
        //header('Location: http://localhost/Software_Group3/home.php');
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