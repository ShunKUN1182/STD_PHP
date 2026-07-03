<?php
// 定数などのサイトの設定を定義する

const SITE_NAME = "サーバーサイド1";

define("DOC_ROOT" , __DIR__);

const WEB_ROOT = "https://10.202.10.3/ecc/sfukusima/php1/";

//DB関連
const DB_DRIVER = "mysql";
const DB_HOST = "localhost";
const DB_NAME = "sfukusima";
const DB_USER = "sfukusima";
const DB_PASS = "eccMyAdmin";
const DB_CHAR = "utf8mb4";
const DB_DSN = DB_DRIVER.":host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHAR;

//テーブル関係
const TB_ZIP = "php1_zip";
const TB_PRODUCTS = "php1_products";
const TB_CATEGORIES = "php1_categories";
?>
