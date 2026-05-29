<?php


?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- link -->
  <link href="asset/styles/style.css" rel="stylesheet">

  <!-- script -->
  <script src="https://cdn.tailwindcss.com"></script>
  <title>php1 - kadai04_2</title>
</head>
<body class="bg-slate-50">
<div class="wrapper w-screen h-screen box-border">

<header class="bg-teal-500">
  <div class="container mx-auto px-2 py-5">
    <h1 class="text-l text-white mb-6">サーバーサイドスクリプト演習１</h1>
    <h2 class="text-white text-3xl">ファイル処理</h2>
  </div><!--/.container-->
</header>

<main>
  <div class="container w-full h-full mx-auto px-2 py-20">
    <h3 class="text-xl border-b-2 border-green-400 pb-2 mb-10">検索の結果</h3>
    <div>

    
      <table class="table-fixd w-full bg-white">
        <thead>
          <tr class="bg-green-100 h-12">
            <th class="w-2/12 text-sm font-normal">郵便番号</th>
            <th class="w-3/12 text-sm font-normal">都道府県</th>
            <th class="w-3/12 text-sm font-normal">市区町村</th>
            <th class="w-4/12 text-sm font-normal">町域</th>
          </tr>
        </thead>
        <tbody>
          <tr class="h-24">
            <td class="text-xl text-center border">〒</td>
            <td class="text-xl text-center border">都道府県を表示</td>
            <td class="text-xl text-center border">市区町村を表示</td>
            <td class="text-xl text-center border">丁名を表示</td>
          </tr>
        </tbody>
      </table>
    
      <?php // 検索エラーのHTML ?>
      <div>
        <p class="text-3xl font-bold">エラーメッセージの表示</p>
      </div>
    

      <div class="flex justify-center mt-10">
        <a href="#" class="block w-40 h-10 text-white text-center leading-10 bg-gray-500 hover:bg-gray-400 rounded-md">検索へ戻る</a>
      </div>
    </div>

  </div><!--/.container-->
</main>

</div><!--/.wrapper-->
</body>
</html>