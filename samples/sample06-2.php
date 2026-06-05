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
  // var_dump($zips);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ファイルの読み込みや！</title>
</head>
<body>
  <h1>郵便番号</h1>
  <!-- <input type=""> -->
  <table>
    <thead>
      <tr>
        <th>郵便番号</th>
        <th>都道府県</th>
        <th>市区名</th>
        <th>町名</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($zips as $zip): ?>
        <tr>
          <td><?= $zip["zip"] ?></td>
          <td><?= $zip["pref"] ?></td>
          <td><?= $zip["city"] ?></td>
          <td><?= $zip["town"] ?></td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</body>
</html>