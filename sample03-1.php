<?php
  //クッキーの保存
  setcookie("sample03","WD2A",time() + 60);

  // 配列をJSONデータへ変換する
  $data = json_encode(["WD1A","WD2A","WD3A"]);
  setcookie("sample03-1",$data,time() + 60);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>テンプレですけどなにか？</h1>
  <h2>クッキーの読み込み</h2>
  <pre>
    <?php var_dump($_COOKIE) ?>
  </pre>
</body>
</html>