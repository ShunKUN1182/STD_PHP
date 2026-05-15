<?php

// セッションの開始
session_start();

// セッションにデータを保存
$_SESSION[ "username" ] = "sfukusima";


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>セッション</title>
</head>
<body>
  <h1>セッション</h1>
  <a href="sample05-2.php">5-2へ</a>
</body>
</html>