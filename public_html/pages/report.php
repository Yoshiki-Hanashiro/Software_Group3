<?php
    include("../template/header.php");  //echo the default Header entries
?>
<?php

// 「mysql:」の後に接続するデータベースを指定する。
$dsn = 'mysql:dbname=test;host=localhost';
$user = 'root';
$password = 'root';

try{
    $dbh = new PDO( $dsn, $user, $password );
}catch( PDOException $error ){
    // 接続に失敗した場合、エラーメッセージを表示。
    echo "接続失敗:".$error->getMessage();
    die();
}

// SQL文を変数「$sql」に代入。
$sql = 'select num, article, userid from test';

// SQL文の実行結果を変数「$stmt」に代入。
$stmt = $dbh->query( $sql );

echo "<table>\n";

echo "\t<tr><th>ID</th><th>記事</th><th>ユーザーID</th></tr>\n";

// 「$stmt」からデータを取り出し、変数「$result」に代入。
// 「PDO::FETCH_ASSOC」を指定した場合、カラム名をキーとする連想配列として「$result」に格納される。
while( $result = $stmt->fetch( PDO::FETCH_ASSOC ) ){
    echo "\t<tr>\n";
    echo "\t\t<td>{$result['num']}</td>\n";
    echo "\t\t<td>{$result['article']}</td>\n";
    echo "\t\t<td>{$result['userid']}</td>\n";
    echo "\t</tr>\n";
}
echo "</table>\n";
?>
<?php
    include("../template/footer.php");  //echo the default Header entries
?>