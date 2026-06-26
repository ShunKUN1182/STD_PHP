-- レコードの抽出(SELECT文)
SELECT * FROM php1_zip

-- 条件(WHERE句)
SELECT * FROM php1_zip WHERE city = "堺市";

-- 抽象比較
SELECT * FROM php1_zip WHERE city LIKE "%堺市%";

-- 備考
LIKEのような予約語を項目名に使いたい場合は、``で囲う

-- 上限設定
SELECT * FROM php1_zip WHERE pref = "大阪府" LIMIT 5;

-- どこから取得するか
SELECT * FROM php1_zip WHERE pref = "大阪府" LIMIT 5 OFFSET 5;

-- 並び替え DESCなら降順、ASCなら昇順
SELECT * FROM php1_zip WHERE city = "大阪市東住吉区" ORDER BY id DESC;