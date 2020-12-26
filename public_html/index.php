<?php
   include("header.php");  //echo the default Header entries
?>

<table width=98%>
  <tr width=100% height="360px">
    <td width=50%>
      <form name="form1" action="sample.php" method="post">
	<table width="10">
	  <tr width="10"><td width="85">サーバIP：</td><td><input type="text" name="txtA" size="15" ></td></tr>
	  <tr width="10"><td width="85">回数：</td><td><input type="text" name="txtB" size="3"></td></tr>
	  <tr width="10"><td width="85">ファイル名：</td><td><input type="text" name="txtC" size="10"></td></tr>
	  <tr width="10"><td width="85"><input type="submit" value="計算"></td><td></td></tr>
      </form>
    </td>
  </tr>
  <tr>
    <td colspan=2>
      <div>
	<textarea name="hoge" rows="20" cols="90" value="てすと">
  <?php
  $tx = $_POST['txtC'];
  echo shell_exec("sh /Users/e195733/Desktop/Ex2pro/2/ipf.sh '".$_POST['txtA']."' '".$_POST['txtB']."' '".$_POST['txtC']."'");
  ?>

	</textarea>
      </div>
    </td>
  </tr>
  </table>
  
  <?php
     include("footer.php");
  ?>
