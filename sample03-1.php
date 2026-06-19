<?php
  // $classes = json_decode(filter_input(INPUT_COOKIE,"sample03-1"));
  // // cookieの読み込みがNULLの場合は、$classesに空配列を保存する
  // if (!$classes) {
  //   $classes = ["中身がないようです、、、"];
  // };

  // NULL合体演算子
  $classes = json_decode(filter_input(INPUT_COOKIE,"sample03-1")) ?? ["中身、あれへんで"];

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
  <p><a href="sample03-2.php">sample03-2へ進む</a></p>
  <ul>
    <?php foreach ($classes as $class):?>
      <li>
        <?= $class ?>
      </li>
    <?php endforeach ?>
  </ul>
</body>
</html>