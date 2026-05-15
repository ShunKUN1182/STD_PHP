<?php
  //template
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    table {
      width: 400px;
      height: 400px;
      border: 1px solid #000;
    }
  </style>
</head>
<body>
  <h1>多重ループ</h1>
  <h2>9*9の表</h2>
  <table>
    <?php for ($i=0; $i < 9; $i++):?>
      <tr>
        <?php for ($j=0; $j < 9; $j++):?>
          <td><?= ($i+1)*($j+1) ?></td>
        <?php endfor ?>
      </tr>
    <?php endfor ?>
  </table>

  <h2>チェスボード</h2>
  <table>
    <?php for ($i=1; $i < 9; $i++):?>
      <tr>
        <?php if($i % 2 == 0): ?>
          <?php for ($j=0; $j < 4; $j++):?>
            <td style="background-color: black;"></td>
            <td></td>
          <?php endfor ?>
        <?php else:?>
          <?php for ($j=0; $j < 4; $j++):?>
            <td></td>
            <td style="background-color: black;"></td>
          <?php endfor ?>
        <?php endif ?>
      </tr>
    <?php endfor ?>
  </table>
</body>
</html>