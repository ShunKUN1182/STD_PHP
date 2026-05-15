<?php

// セッションの開始
session_start();

// セッションのデータを参照
// セッションにデータがなければリダイレクト
// isset() 指定した入れ物が存在するかをチェック
if( ! isset($_SESSION[ "username" ])) {
  // falseのとき
  print "リダイレクト";
};

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
  <a href="sample05-1.php">5-1へ</a>
</body>
</html>