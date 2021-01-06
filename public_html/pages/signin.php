<?php
clearstatcache();
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

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

<form action="" method="POST">
    <div class = "log-in">
        <p>新規登録</p>
        <div class="cp_iptxt">
            <input type="text" name="username" value="" placeholder="user ID" class="login-input">
        </div>
        <div class="cp_iptxt">
            <input type="password" name="password" value="" placeholder="password" class="login-input">
        </div>
        <input type="submit" name="signin" value="新規登録" class="button">
    </div>
    <div class = "log-in">
        <p>ログイン画面へはこちらから</p>
        <input type="button" onclick="location.href='../index.php'" value="ログイン画面" class="button">
    </div>
</form>

<?php
    include("../template/footer.php");  //echo the default Header entries
?>