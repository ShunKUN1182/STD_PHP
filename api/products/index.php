<?php
require_once __DIR__ . "/../../utility.php";

try {
  $db = new PDO(DB_DSN,DB_USER,DB_PASS);
  $name = filter_input(INPUT_GET,"name") ?: "";
  $category = filter_input(INPUT_GET,"category") ?: "";
  $products_table = TB_PRODUCTS; 
  $queryParams = [];
  $bindParams = [];
  if ($name) {
    $queryParams[] = "name LIKE ?";
    $bindParams[] = $name;
  }
  if ($category) {
    $queryParams[] = "category_id = ?";
    $bindParams[] = $category;
  }
  $where = implode(" AND ", $queryParams);
  if ($where) {
    $where = " WHERE " . $where;
  }
  $sql = "SELECT * FROM {$products_table} {$where}";
  $stmt = $db->prepare($sql);
  $stmt->execute($bindParams);
  $result = [];
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $result[] = $row;
  }
}
catch (PDOException $error) {
  print $error->getMessage();
}

// レスポンスの準備
// header("Content-Type: application/json");
// header("Access-Control-Allow-Origin: *");
headers(
  [
    "Content-Type" => "application/json",
    "Access-Control-Allow-Origin" => "*",
  ]
);

print json_encode($result);
?>
