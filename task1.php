<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <title>js中級タスク1</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<!-- ヘッダー -->
<?php require('header.php') ?>

<!-- メイン -->
<div class="cal-container">
  <div class="cal-title">足し算</div>
  <input type="text" id="js-column1" class="cal-column cal-parts" placeholder="数字入力①" />
  <div class="cal-parts">+</div>
  <input type="text" id="js-column2" class="cal-column cal-parts" placeholder="数字入力②" />
  <input type="submit" id="js-cal-button" class="cal-column cal-parts" value="合計" disabled="disabled" />
  <div class="cal-parts cal-warning">数字を入力してください</div>
</div>

<!-- footer -->
<?php
require('footer.php');
?>

</html>