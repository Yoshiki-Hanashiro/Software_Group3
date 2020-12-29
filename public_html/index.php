<?php
    include("template/header.php");  //echo the default Header entries
?>

<table width=98%>
  <tr width=100% height="360px">
    <td width=50%>
      <form name="form1" action="sample.php" method="post">
        <table width="15">
          <tr width="15"><td width="100">ユーザーID：</td><td><input type="text" name="txtA" size="15" ></td></tr>
          <tr width="15"><td width="100">パスワード：</td><td><input type="text" name="txtB" size="15"></td></tr>
          <tr width="10"><td width="85"><input type="submit" value="ログイン"></td><td></td></tr>
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
