<?php
  // アップロードしたファイル情報
  // var_dump($_FILES);
  // アップロードファイル情報
  $files = $_FILES["upfile"];
  // アップロードしたファイルのチェック
  if (is_uploaded_file($files["tmp_name"])) {
    // 重複しないファイル名の生成(トークン生成)
    // ## ローテクバージョン
    // $filename = "";
    // $patternStrings = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    // $length = 15;
    // $flag = true;
    // while($flag) {
    //   for ($i = 0; $i < $length; $i++) { 
    //     $filename .= substr($patternStrings,rand(0,strlen($patternStrings)-1),1);
    //   };
    //   $flag = false;
    //   // 生成したトークンの強度チェック
    //   if (
    //     !preg_match("/[a-z]+/",$filename) ||
    //     !preg_match("/[A-Z]+/",$filename) ||
    //     !preg_match("/[0-9]+/",$filename)
    //     ) {
    //       print "英小文字なし";
    //       $flag = true;
    //     }
    // }
    // print $filename;
    
    // ファイルをアップロードするフォルダがあるかチェック
    // なければ、フォルダを生成する

    // ##ハイテクバージョン
    $filename = base64_encode(random_bytes(15));
    // 不要な記号を削除
    $filename = str_replace(["=","+","/","."], "", $filename);
    $filename = substr($filename,0,15);
    print $filename . "(" . strlen($filename) . ")";



    if (!is_dir("../files/upload_images")) {
      // フォルダの生成
      mkdir("../files/upload_images");
      // フォルダの権限設定
      chmod("../files/upload_images",0777);
    }
    // アップロードしたファイルを所定のフォルダへ移動
    if (move_uploaded_file($files["tmp_name"],"../files/upload_images/{$filename}.png")) {
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