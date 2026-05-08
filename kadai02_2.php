<?php
  require_once __DIR__ . "/kadai02_resource.php";
  $productId = filter_input(INPUT_GET,"product_id",FILTER_VALIDATE_INT);

  $selectProduct = [];
  foreach($products as $product):
    if ($product["id"] == $productId) {
      $selectProduct = $product;
    };
  endforeach;

  $data = json_decode(filter_input(INPUT_COOKIE,"php1_kadai02"));
  $data[] = $selectProduct["id"];
  $data = json_encode($data);
  setcookie("php1_kadai02",$data,time()+60);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link -->
  <link href="css/style.css" rel="stylesheet">

  <!-- script -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>php1 - kadai02_2</title>
</head>
<body class="bg-slate-50">
<div class="wrapper box-border">

<header class="bg-teal-500">
  <div class="container mx-auto px-2 py-5">
    <h1 class="text-l text-white mb-6">サーバーサイドスクリプト演習１</h1>
    <h2 class="text-3xl text-white">クッキー</h2>
  </div><!--/.container-->
</header>

<main>
  <div class="container w-full h-full mx-auto px-2 py-20">

    <h2 class="text-xl border-b-2 border-pink-400 pb-2 mb-10">取り扱い商品の詳細</h2>
    <div class="product-wrap">
      <div class="flex flex-col lg:flex-row flex-wrap p-5 mb-10 border rounded-md">
          <figure class="w-full lg:w-1/2"><img src="images/<?= $selectProduct["thumbnail"]["large"] ?>" class="rounded-md"></figure>
          <div class="flex flex-col lg:w-1/2 lg:px-10 mt-10 lg:mt-0">
            <h3 class="text-2xl font-bold"><?= $selectProduct["name"] ?></h3>
            <p class="flex-grow text-lg my-10 lg:my-20"><?= $selectProduct["description"] ?></p>
            <p class="text-2xl text-pink-400 font-bold">¥<?= $selectProduct["price"] ?></p>
          </div>
      </div>
      <div class="flex justify-end">
        <a href="kadai02_1.php" class="block w-40 h-10 text-white text-center leading-10 bg-gray-500 hover:bg-gray-400 rounded-md">一覧に戻る</a>
      </div>
    </div>

  </div><!--/.container-->
</main>

</div><!--/.wrapper-->
</body>
</html>