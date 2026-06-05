<?php
$products = [
  ["id" => 1, "name" => "ノートパソコン", "price" => 150000],
  ["id" => 2, "name" => "スマートフォン", "price" => 80000],
  ["id" => 3, "name" => "ワイヤレスイヤホン", "price" => 15000],
  ["id" => 4, "name" => "カップラーメン", "price" => 250],
  ["id" => 5, "name" => "MacBookPro", "price" => 300000],
];
session_start();
if (isset($_SESSION["cart"])) {
  $cart = $_SESSION["cart"];
}else {
  $cart = [];
}
$newId = filter_input(INPUT_POST,"product_id",FILTER_VALIDATE_INT);
if (isset($_SESSION["cart"][$newId])) {
  $_SESSION["cart"][$newId]++;;
}else {
  $_SESSION["cart"][$newId] = 1;
}
foreach($products as $product) {
    $cart[] = $product;
    var_dump($cart);
}


$_SESSION["cart"] = $cart;

var_dump($cart);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div>
    <h1>商品一覧</h1>
    <div class="product-grid">
      <?php foreach ($products as $product):?>
        <div>
          <h3><?= $product["name"] ?></h3>
          <p>&yen;<?= $product["price"] ?></p>
          <form action="" method="post">
            <input type="hidden" name="product_id" value=<?= $product["id"] ?>>
            <button type="submit" name="add">カートに入れる</button>
          </form>
        </div>
      <?php endforeach ?>
    </div>

    <hr>

    <h2>ショッピングカート</h2>
    <p>カートは空です。</p>
    <table>
      <thead>
      <tr>
          <th>商品名</th>
          <th>価格</th>
          <th>数量</th>
          <th>小計</th>
      </tr>
      </thead>

      <tbody>
              <tr>
                  <td></td>
                  <td>&yen;</td>
                  <td></td>
                  <td>&yen;</td>
              </tr>
      </tbody>
      <tfoot>
        <tr>
            <th colspan="3">合計金額</th>
            <th>&yen;</th>
        </tr>
      </tfoot>
    </table>
    <form action="" method="post">
        <button type="submit" name="clear">カートを空にする</button>
    </form>
  </div>
</body>

</html>