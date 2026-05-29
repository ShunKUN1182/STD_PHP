<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - ファイルの入出力</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="submit.php" method="post">
        <label for="name">氏名</label>
        <input type="text" id="name" name="name" required>
        <label for="email">メールアドレス</label>
        <input type="email" id="email" name="email" required>
        <label for="eat">好きな食べ物</label>
        <select name="eat" id="eat">
            <option value="寿司">寿司</option>
            <option value="ラーメン">ラーメン</option>
            <option value="ピザ">ピザ</option>
        </select>

        <button type="submit">送信</button>
    </form>
</body>
</html>