<?php
  // データの表示(書き込み)
  print "Hello PHP World.";
  
  // 変数宣言
  $siteName = "サーバーサイド演習1";

  // データの確認デバック命令
  var_dump($siteName)
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP1</title>
</head>
<body>
  <h1>PHPのお勉強</h1>
  <p><?php print "Hello PHP World"?></p>
  <p><?php echo "こんにちは","わたしはえるです"?></p>

  <!-- <?php echo "";?>　これを省略した書き方 -->
  <p><?="こんなふうに短く書くことも出来るのよーん"?></p>

  <?= "サイトの名は、{$siteName}です"?>
</body>
</html>
