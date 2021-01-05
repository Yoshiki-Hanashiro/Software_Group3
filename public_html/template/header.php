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
     <div class="element">
      <div id="nav-drawer">
        <input id="nav-input" type="checkbox" class="nav-unshown">
        <label id="nav-open" for="nav-input"><span></span></label>
        <label class="nav-unshown" id="nav-close" for="nav-input"></label>
        <div id="nav-content">
          <table cellspacing="20">
            <tr>
                <td><img src="../images/mypage.png" class="menu" height="80" width="80"></td>
                 <td><a href = "../pages/mypage.php">マイページ</a></td>
            </tr>
            <tr>
                <td><img src="../images/homework.png" class="menu" height="80" width="80"></td>
                <td><a href="../pages/report.php">記事一覧</a></td>
            </tr>
            <tr>
                <td><img src="../images/lecture.png" class="menu" height="80" width="80"></td>
                <td><a href="../pages/subject.php">授業一覧</a></td>
            </tr>
            <tr>
                <td><img src="../images/box.png" class="menu" height="80" width="80"></td>
                <td><a href = "../pages/post.php">記事投稿</a></td>
            </tr>
        </table>
       </div>
     </div>
     </div>
  <div class = "element">
    <div class="header-logo">
          <h1><font size="10">課題攻略サイト</font><font size = "5"></font></h1>
   </div>
  </div>
</div>
