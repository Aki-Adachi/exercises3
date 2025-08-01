<?php session_start(); ?>
<?php require 'includes/header.php'; ?>
<div class="nav"><a href="index.php">TOP</a> ＞ <a href="">カート</a></div>
<hr>
<p class="welcome">
<?php
    if (isset($_SESSION['customer'])) {
      echo 'ようこそ　', htmlspecialchars($_SESSION['customer']['name']) . ' 様';
    } else {
      echo 'ようこそ　ゲスト様';
    }
?>
</p>
<hr>
<section class="lowerPage">
<?php
  unset($_SESSION['products'][$_REQUEST['id']]);
  echo '<div class=frame>';
  echo 'カートから商品を削除しました。';
  echo '</div>';
  echo '<a href="cart.php" class="lowerPageLink">カートへ戻る</a>';
  echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
?>
</section>
<?php require 'includes/footer.php'; ?>
