<?php

  // 外部ファイルの読み込み
  require_once __DIR__ . "/config.php";

  // スーパーグローバル関数
  print "<pre>";
  var_dump($_GET);
  print "</pre>";

  print "<hr>";
  print "<pre>";
  print_r($_SERVER);
  print "</pre>";

  // 定数宣言
  define("SITE_NAME2" , "サーバーサイドよ");

  print __DIR__;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= SITE_NAME . "-変数と定数-" ?></title>
</head>
<body>
  <h1><?php echo SITE_NAME2?></h1>
  <?php require "sample01-2-header.php" ?>
</body>
</html>