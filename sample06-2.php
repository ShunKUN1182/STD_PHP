<?php
  // ファイル操作
  // ファイルを開ける
  $fp = fopen("files/zip.csv", "r");

  // 行単位で文字列を取り出して、処理を行う
  // 次の行がない（EOF）に到達したら false
  $zips = [];
  while($row = fgets($fp)){
    if (preg_split("/,/",$row)[1] == "大阪府" ) {
      // $zips[] = preg_split("/,/", $row);
      // [$zip,$pref,$city,$town] = preg_split("/,/",$row);
      [$zip,$pref,$city,$town] = explode(",",$row);
      $zips[] = [
        "zip" => $zip,
        "pref" => $pref,
        "city" => $city,
        "town" => $town,
      ];
    }
  }
  // ファイルを閉じる
  fclose($fp);
  var_dump($zips);
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