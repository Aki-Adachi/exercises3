<?php session_start(); ?>
<?php require 'includes/header.php'?>

<div class="nav"><a href="">TOP</a>＞<a href="">商品一覧</a></div>
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

<section class="products">
    <h2>商品一覧</h2>
    <hr>
    <article class="productMenu">
      <h3>メインメニュー</h3>
        <?php
        $pdo=new PDO('mysql:host=localhost;dbname=ss367069_ccdonuts;charset=utf8', 'ss367069_adachi', '12345asdfg');
        $sql = $pdo->query('SELECT * FROM products');
        echo '<div class="productList">';
        foreach ($sql as $row) {
          $name = htmlspecialchars($row['name']);
          $price = htmlspecialchars($row['price']);
          $id = htmlspecialchars($row['id']);
          $spimagePath = 'images/sp' . $id . '.png';
          $pcimagePath = 'images/pc' . $id . '.png';

          if ($id <= 6) {
            echo '<div class="product">';
            echo '<a href="detail.php?id=' . $id . '"><img src="' . $spimagePath . '" alt="' . $name . 'の画像" class=sp></a>';
            echo '<a href="detail.php?id=' . $id . '"><img src="' . $pcimagePath . '" alt="' . $name . 'の画像" class=pc></a>';
            echo '<p>' . $name . '</p>';
            echo '<p class="tax">税込 ￥' . $price . '円</p>';
            echo '<form action="cart.php" method="post">';
            echo '<input type="hidden" name="id" value="' . $id . '">';
            echo '<input type="hidden" name="name" value="' . $name . '">';
            echo '<input type="hidden" name="price" value="' . $price . '">';
            echo '<input type="hidden" name="count" value="1">'; // 1個追加（固定）
            echo '<input type="submit" value="カートに入れる" class="inCart">';
            echo '</form>';
            echo '</div>';
          }
        }
        echo '</div>';
        echo '<h3>バラエティセット</h3>';
        $sql = $pdo->query('SELECT * FROM products');
        echo '<div class="productList">';
        foreach ($sql as $row) {
          $name = htmlspecialchars($row['name']);
          $price = htmlspecialchars($row['price']);
          $id = htmlspecialchars($row['id']);
          $spimagePath = 'images/sp' . $id . '.png';
          $pcimagePath = 'images/pc' . $id . '.png';

          if ($id >= 7 && $id <= 12) {
            echo '<div class="product">';
            echo    '<a href="detail.php?id=' . $id . '"><img src="' . $spimagePath . '" alt="' . $name . 'の画像" class=sp></a>';
            echo    '<a href="detail.php?id=' . $id . '"><img src="' . $pcimagePath . '" alt="' . $name . 'の画像" class=pc></a>';
            echo    '<p>' . $name . '</p>';
            echo    '<p class="tax">税込 ￥' . $price . '円</p>';

            echo    '<form action="cart.php" method="post">';
            echo        '<input type="hidden" name="id" value="' . $id . '">';
            echo        '<input type="hidden" name="name" value="' . $name . '">';
            echo        '<input type="hidden" name="price" value="' . $price . '">';
            echo        '<input type="hidden" name="count" value="1">'; // 1個追加（固定）
            echo        '<input type="submit" value="カートに入れる" class="inCart">';
            echo    '</form>';

            echo '</div>';

            }
          }
        echo '</div>';
        ?>
    <article>
</section>
<?php require 'includes/footer.php'?>