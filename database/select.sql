-- レコードの抽出(SELECT文)
SELECT * FROM php1_zip

-- 条件(WHERE句)
SELECT * FROM php1_zip WHERE city = "堺市";

-- 抽象比較
SELECT * FROM php1_zip WHERE city LIKE "%堺市%";

-- 備考
LIKEのような予約語を項目名に使いたい場合は、``で囲う