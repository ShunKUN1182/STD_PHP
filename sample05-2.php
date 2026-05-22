<?php
// マイページ
// セッションの開始
// session_start();
// セッションのデータを参照
// セッションにデータがなければリダイレクト
// isset() 指定した入れ物が存在するかをチェック
// if( ! isset($_SESSION[ "username" ])) {
// falseのとき
//   print "リダイレクト";
// };
session_start();

// ログイン認証処理
if(empty($_SESSION["username"])){
  $testPassword = "password";
  $hashPassword = password_hash($testPassword,PASSWORD_DEFAULT);
  $username = filter_input(INPUT_POST,"username");
  $password = filter_input(INPUT_POST,"password");

  if (password_verify($password,$hashPassword)) {
    // 入力したパスワードと暗号化したパスワードが一致した時
    $_SESSION["username"] = $username;
  } else {
    // ログインページへリダイレクト
    header("Location:sample05-1.php");
    exit;
  }
}

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
  <h2>マイページ</h2>
  <a href="sample05-3.php">ログアウト</a>
</body>
</html>