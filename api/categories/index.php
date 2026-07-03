<?php
require_once __DIR__ . "/../../utility.php";
try {
  $db = new PDO(DB_DSN,DB_USER,DB_PASS);
  $name = filter_input(INPUT_GET,"name") ?: "";
  $category = filter_input(INPUT_GET,"category") ?: "";
  $categories_table = TB_CATEGORIES;
  $sql = "SELECT * FROM $categories_table";
  $stmt = $db->prepare($sql);
  $stmt->execute();
  $categories = [];
  while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $categories[] = $row; 
  };
} catch (PDOException $error) {
  print $error->getMessage();
}

headers(  
  [
    "Content-Type" => "application/json",
    "Access-Control-Allow-Origin" => "*",
  ]
);

print json_encode($categories);
