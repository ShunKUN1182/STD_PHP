<?php
  $answers = [];
  $answers["name"] = filter_input(INPUT_POST,"name");
  $answers["email"] = filter_input(INPUT_POST,"email");
  $answers["eat"] = filter_input(INPUT_POST,"eat");

  file_put_contents("../files/mondai01.json",json_encode($answers));
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ファイルの入出力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>アンケートにご協力いただきありがとうございました</h1>
</body>
</html>