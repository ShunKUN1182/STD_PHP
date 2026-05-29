<?php
  // ファイル操作
  // ファイルを開ける
  $fp = fopen("files/zip.csv", "r");

  // 行単位で文字列を取り出して、処理を行う
  // 次の行がない（EOF）に到達したら false
  while($row = fgets($fp)){
    var_dump($row);
  }
  // ファイルを閉じる
  fclose($fp);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ファイルの読み込みや！</title>
</head>
<body>
</body>
</html>