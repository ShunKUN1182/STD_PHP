<?php
  // 配列の書き方
  $classses = [
      "WD1A","WD2A","WD3A",
      "SE1A","SE2A","SE3A",
  ];
  // 要素に任意の名前をつけた配列(連想配列)
  $schools = [
    [
      "id" => 1,
      "name" => "ECCコンピュータ専門学校",
      "collages" => [
        [
          "id" => 1,
          "name" => "IT",
          "courses" => [
            [
              "id" => 1,
              "name" => "Webデザイン",
              "short_name" => "WD",
            ],
            [
              "id" => 2,
              "name" => "システム開発研究",
              "short_name" => "IE",
            ],
          ],
        ],
        [
          "id" => 2,
          "name" => "ゲームクリエイティブ",
          "courses" => [],
        ]
      ],
    ],
  ]
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>ループ処理</h1>
  <ul>
    <?php foreach ($classses as $key => $class): ?>
      <li><?= $key + 1 ?>番目: <?= $class ?></li>
    <?php endforeach; ?>
  </ul>

  <ul>
    <?php foreach ($schools as $school):?>
      <li>
        <?= $school["name"]?>
        <ul>
          <?php foreach ($school['collages'] as $collage):?>
            <li><?= $collage["name"] ?>カレッジ
              <ul>
                <?php foreach ($collage["courses"] as $course):?>
                  <li><? $course["name"]= ?>コース(<?= $course["short_name"]?>)</li>
                <?php endforeach ?>
              </ul>
            </li>
          <?php endforeach ?>
        </ul>
      </li>
    <?php endforeach ?>
  </ul>
</body>
</html>