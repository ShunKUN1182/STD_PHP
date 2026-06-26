<?php
//DB操作の流れ
// 1.DB接続 2.SQLの実行 3.SQLの結果を取り出す 4.DB接続を閉じる

try {
  // DB接続
  $db = new PDO(
    dsn: "mysql:host=localhost;dbname=sfukusima;charset=utf8mb4",
    username:"sfukusima",
    password:"eccMyAdmin",
  );
  // SQLの実行
  // SQLを実行して、プリペアードステートメントを準備
  $stmt = $db->prepare(query: 'SELECT * FROM php1_zip WHERE pref = "大阪府"');
  // プリペアードステートメントのSQLを実行した結果セットを生成する。
  $stmt->execute();
  // SQLの結果を取り出して処理を行う  
  $result = [];
  // 結果セットの先頭レコード (行データ) から順次抜き出す。
  while ($row = $stmt->fetch(mode: PDO::FETCH_ASSOC)) {
    $result[] = $row;
  }
  var_dump($result);
} catch(PDOException $error) {
  print $error->getMessage();
}


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>DB操作</h1>
  <h2>SELECT</h2>
</body>
</html>