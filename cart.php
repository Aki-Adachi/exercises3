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

<section class="cart">

<?php

if (!empty($_REQUEST['id']) && !empty($_REQUEST['name']) && !empty($_REQUEST['price']) && !empty($_REQUEST['count'])) {
    $id = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $count = $_REQUEST['count'];

    if (!isset($_SESSION['products'])) {
        $_SESSION['products'] = [];
    }

    $_SESSION['products'][$id] = [
        'name' => $name,
        'price' => $price,
        'count' => $count
    ];
    }

    $totalCount = 0;
    $subtotal = 0;
    foreach ($_SESSION['products'] as $item) {
        $totalCount += $item['count'];
        $subtotal += $item['price'] * $item['count'];
    }

?>

<div class="cartFrame">
    <p>現在　商品<?php echo $totalCount; ?>点</p>
    <p style="padding:20px 0;">ご注文小計：税込 <span class="tax">￥<?php echo number_format($subtotal); ?></span></p>
    <a href="purchaseConfirm.php" class="lowerPageLink">購入確認へ進む</a>
</div>

<div class="cartProducts">

<?php
// 商品一覧表示（カートに入っているすべて）
if (!empty($_SESSION['products'])) {
$pdo=new PDO('mysql:host=localhost;dbname=ss367069_ccdonuts;charset=utf8', 'ss367069_adachi', '12345asdfg');

    foreach ($_SESSION['products'] as $id => $product) {
        // 商品情報をDBから取得（画像など）
        $sql = $pdo->prepare('SELECT * FROM products WHERE id=?');
        $sql->execute([$id]);
        $row = $sql->fetch();

        echo '<div class="cartItem">';
        echo '<p><img alt="image" src="images/pc', $row['id'], '.png" class="detailImg"></p>';
        echo '<div class="cartFlex">';
        echo '<form action="cart.php" method="post">';
        echo '<p class="productName"><strong>', $product['name'], '</strong></p>';
        echo '<hr class="pc" style="color: #E6CCB2;">';
        echo '<div class="cartFlex2">';
        echo '<p class="tax">税込 ￥', number_format($product['price']), '円</p>';
        echo '<p>数量　<input type="number" name="count" value="', $product['count'], '" size="2" maxlength="2">個</p>';
        echo '</div>';
        echo '<input type="hidden" name="id" value="', $id, '">';
        echo '<input type="hidden" name="name" value="', $product['name'], '">';
        echo '<input type="hidden" name="price" value="', $product['price'], '">';
        echo '<input type="submit" value="再計算">';
        echo '<a href="cartDelete.php?id=', $id, '" class="deleteLink">削除する</a>';
        echo '<hr class="pc" style="color: #E6CCB2;">';
        echo '</div>';
        echo '</form>';
        echo '</div>';

    }
    } else {
        echo '<p class="none">カートに商品がありません。</p>';
        echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
        echo '<a href="products.php" class="lowerPageLink">商品一覧ページへ</a>';
    }
?>

</div>

<div class="cartFrame">
    <p>現在　商品<?php echo $totalCount; ?>点</p>
    <p style="padding:20px 0;">ご注文小計：税込 <span class="tax">￥<?php echo number_format($subtotal); ?></span></p>
    <a href="purchaseConfirm.php" class="lowerPageLink">購入確認へ進む</a>
</div>

<a href="products.php" class="continue">お買い物を続ける</a>

</section>
<?php require 'includes/footer.php'; ?>
