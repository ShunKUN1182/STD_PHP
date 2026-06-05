<?php
  // アップロードしたファイル情報
  var_dump($_FILES);
  // アップロードファイル情報
  $files = $_FILES["upfile"];
  // アップロードしたファイルのチェック
  if (is_uploaded_file($files["tmp_name"])) {
    // アップロードしたファイルを所定のフォルダへ移動
    if (move_uploaded_file($files["tmp_name"],"files/{$files["name"]}")) {
      print "アップロード先に移動したで";
    }else {
      print "アップロード先に移動できんかった";
    }
  } else {
    print "不正なファイルやで！";
  }
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ファイルのアップロード</title>
</head>
<body>
  <h1>ファイルのアップロード</h1>
</body>
</html>