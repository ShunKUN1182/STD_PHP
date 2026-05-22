<?php
// ログインページにする
// セッションの開始
// session_start();
// セッションにデータを保存
// $_SESSION[ "username" ] = "sfukusima";
// ログイン済みはマイページへリダイレクト

// セッションの開始
session_start();
if (isset($_SESSION["username"])) {
  header("Location:sample05-2.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>セッション</title>
  <style>
    form {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 30px;
    }
  </style>
</head>
<body>
  <h1>セッション</h1>
  <!-- <a href="sample05-2.php">5-2へ</a> -->
  <form action="sample05-2.php" method="POST">
    <div>
      <label for="username">USER ID</label>
      <input type="text" name="username" id="username">
    </div>
    <div>
      <label for="">PASSWORD</label>
      <input type="password" name="password" id="password">
    </div>
    <div>
      <button type="submit">ログイン</button>
    </div>
  </form>
</body>
</html>