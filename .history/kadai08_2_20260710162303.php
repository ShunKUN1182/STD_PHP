<?php
  require_once __DIR__ . "/utility.php";

  //メソッドの種類をチェック
  if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: kadai08_1.php");
    exit;
  }

  $request = filter_input
?>