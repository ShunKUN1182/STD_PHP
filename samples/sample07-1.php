<?php
  
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
  <form action="sample07-2.php" method="POST" enctype="multipart/form-data">
    <label for="file"></label>
    <input type="file" name="upfile" id="file" accept="image/*">
    <button type="submit">アップロード</button>
  </form>
</body>
</html>