<?php
  // 配列の書き方
  $classses = [
      "WD1A","WD2A","WD3A",
      "SE1A","SE2A","SE3A",
  ];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ループ処理</h1>
  <ul>
    <?php foreach ($classses as $key => $class): ?>
      <li><?= $key + 1 ?>番目: <?= $class ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>