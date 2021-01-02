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
      <tr>
        <th>
          <div id="nav-drawer">
          <input id="nav-input" type="checkbox" class="nav-unshown">
          <label id="nav-open" for="nav-input"><span></span></label>
          <label class="nav-unshown" id="nav-close" for="nav-input"></label>
          <div id="nav-content">
          <ul>
            <li>
                <img src="../images/mypage.png" class="menu">
            </li>
            <li>
                <p> <a href = "mypage.php">マイページ</a></p>
            </li>
            <li>
                <img src="../images/lecture.png" class="menu">
            </li>
            <li>
                <p><a href="subject.php">授業一覧</a></p>
            </li>
            <li>
                <img src="../images/homework.png" class="menu">
            </li>
            <li>
                <p><a href="report.php">課題一覧</a></p>
            </li>
            <li>
                <img src="../images/box.png" class="menu">
            </li>
            <li>
                <p><a href = "question.php">質問箱</a></p>
            </li>
        </ul>
        </div>
        </div>
        </th>
        <hr size="15" color="#808080">
        <th>
         <div class="header-logo">
          <h1><font size="10">課題攻略速報</font><font size = "5"><i> 〜学生が創る「涙」と「<font color="red">情熱</font>」の物語〜</i></font></h1>
          </div>
        </div>
        </th>
      </tr>
