<?php

require_once __DIR__ . "/config.php";

try {
  $city = "堺市";
  // DB接続
  $db = new PDO(DB_DSN,DB_USER,DB_PASS);

  // テーブル名
  $table = TB_ZIP;

  //SQL
  $sql = "SELECT * FROM $table WHERE city LIKE ? ";
  
  // SQLでプリペアードステートメントの準備
  // プリペアードステートメントを使うことで、SQLインジェクション対策
  $stmt = $db->prepare($sql);
  // プリペアードステートメントから結果セットの生成
  $stmt->execute(params:["{$city}%"]);
  $result = [];
  // 結果セットからレコードの取り出し
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $result[] = $row;
  }
  var_dump($result);
}
catch (PDOException $error) {
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
  <h2>SELECT WHERE</h2>
</body>
</html>