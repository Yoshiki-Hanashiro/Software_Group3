<?php
    include("../template/header.php");  //echo the default Header entries
?>
<?php
 
 //データベース接続
 $server = "";  
 $userName = ""; 
 $password = ""; 
 $dbName = "";
  
 $mysqli = new mysqli($server, $userName, $password,$dbName);
  
 if ($mysqli->connect_error){
     echo $mysqli->connect_error;
     exit();
 }else{
     $mysqli->set_charset("utf-8");
 }
  
 $sql = "SELECT * FROM coments";
  
 $result = $mysqli -> query($sql);
  
 //クエリー失敗
 if(!$result) {
     echo $mysqli->error;
     exit();
 }
  
 //レコード件数
 $row_count = $result->num_rows;
  
 //連想配列で取得
 while($row = $result->fetch_array(MYSQLI_ASSOC)){
     $rows[] = $row;
 }
  
 //結果セットを解放
 $result->free();
  
 // データベース切断
 $mysqli->close();
  
 ?>
  
 <!DOCTYPE html>
 <html>
 <head>
 <title>nameテーブル表示</title>
 <meta charset="utf-8">
 </head>
 <body>
 <h1>記事一覧</h1> 
  
  
 <table border='1'>
 <tr><th>ID</th><th>タイトル</th><th>ユーザー</th><th>記事</th></tr>
  
 <?php 
 foreach($rows as $row){
 ?> 
 <tr> 
     <td><?php echo $row['number']; ?></td> 
     <td><?php echo htmlspecialchars($row['title'],ENT_QUOTES,'UTF-8'); ?></td> 
     <td><?php echo htmlspecialchars($row['author'],ENT_QUOTES,'UTF-8'); ?></td>
     <td><?php echo htmlspecialchars($row['text'],ENT_QUOTES,'UTF-8'); ?></td>
 </tr> 
 <?php 
 } 
 ?>
  
 </table>
  
 </body>
 </html>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>