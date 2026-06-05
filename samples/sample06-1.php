<?php
  //ファイルの取り込み
  $fileContent = file_get_contents("files/sample06-1.txt");
  var_dump($fileContent);

  //ファイルの出力(作成)
  $filePutContent = file_put_contents("files/sample06-1.txt","PUTで出力したファイルやで");

  // 配列データを外部ファイルに出力
  $arr = [
    [
      "id" => uniqid(),
      "name" => "sfukusima",
    ],
  ];
  file_put_contents("files/sample06-1.json",json_encode($arr));
  var_dump(file_get_contents("files/sample06-1.json"));
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