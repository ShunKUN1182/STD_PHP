<?php
  //送信データの取り出し
  // $_POSTでアクセス
  if (isset($POST["_name"])) {
    $name = $_POST["_name"];
  }else {
    $name = null;
  }
  var_dump($name);

  // filter_input()で取り出す
  $filterName = filter_input(INPUT_POST,"_name",FILTER_VALIDATE_INT);
  var_dump($filterName)
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>送ってくださいFormのデータを</h1>
  <h2>受信側やで</h2>
  <form action=""></form>
</body>
</html>