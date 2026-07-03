<?php
require_once __DIR__ . "/config.php";

//headers header関数を生成する

function headers(array $params): void {
  foreach ($params as $key => $param) {
    header("{$key}: {$param}");
  }
};
