<?php
    include("../template/header.php");  //echo the default Header entries
?>
<?php

 // データベースに接続
 $dsn = 'mysql:host=localhost;dbname=software;';
 $user = 'coral'; 
 $pass = 'coral'; 
 
 try{    
    $pdo = new PDO($dsn,$user,$pass);
 } catch (PDOException $e) {
    exit('データベースに接続できませんでした。' . $e->getMessage());
 }
 
 
 $sql = "SELECT * FROM contents";

 $result = $pdo -> query($sql);
 
 //クエリー失敗
 if(!$result) {
     echo "query miss";
     echo $pdo->error;
     exit();
 }
  
 //レコード件数
 $row_count = $result->rowCount();


 //連想配列で取得
 while($row = $result->fetch(PDO::FETCH_ASSOC)){
     $rows[] = $row;
 }

 //結果セットを解放
 $result->null;
 
 // データベース切断
 $pdo->NUll;
 
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