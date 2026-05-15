<?php
  //template
  
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
</body>
</html>