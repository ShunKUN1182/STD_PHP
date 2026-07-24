<?php 
require_once __DIR__ . "/utility.php";

// [DELETE]メソッドかをチェック
if (
  filter_input(INPUT_SERVER,"REQUEST_METHOD") !== "POST" ||
  $_POST["_method"] !== "DELETE"
  ) {
  // kadai06_1.php へリダイレクト
  redirect("kadai06_1.php");
}

var_dump($_POST);
$productCode = filter_input(INPUT_POST,"product_code");

//　レコードを削除
try {
  $db = new PDO(DB_DSN,DB_USER,DB_PASS);
  $table = TB_PRODUCTS;
  $sql = "DELETE FROM {$table} WHERE code = ?";
  $stmt = $db->prepare($sql);
  $stmt->execute([$productCode]);
  redirect("kadai06_1.php");
} catch (PDOException $e) {
  print $e->getMessage();
} catch (Exception $e) {
  print $e->getMessage();
}
?>