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

<div class="detail">
<?php
$pdo=new PDO('mysql:host=localhost;dbname=ss367069_ccdonuts;charset=utf8', 'ss367069_adachi', '12345asdfg');
$sql=$pdo->prepare('select * from products where id=?');
$sql->execute([$_REQUEST['id']]);
foreach ($sql as $row) {
	echo '<p><img alt="image" src="images/pc', $row['id'], '.png" class="detailImg"></p>';
	echo '<div class="productTool">';
	echo '<form action="cart.php" method="post">';
	echo '<p style="font-weight:bold;" class="productName">', $row['name'], '</p>';
	echo '<hr style=color:#E6CCB2;>';
	echo '<p class="productDetail">', $row['introduction'], '</p>';
	echo '<hr style=color:#E6CCB2;>';
	echo '<p><p  class="tax">税込 ￥', $row['price'], '円</p>';
	echo '<div class="operation">';
	echo '<p>個数：<input type="number" name="count" value="1" min="1" max="99"> 個</p>';
	echo '<input type="hidden" name="id" value="', $row['id'], '">';
	echo '<input type="hidden" name="name" value="', $row['name'], '">';
		echo '<input type="hidden" name="introduction" value="', $row['introduction'], '">';
	echo '<input type="hidden" name="price" value="', $row['price'], '">';
	echo '<input type="submit" value="カートに入れる">';
	echo '</form>';
	echo '<a href="index.php?id=', $row['id'], 
		'"><img src="images/favorite.png"></a>';
	echo '</div>';
	echo '</div>';
}
?>
</div>
<?php require 'includes/footer.php'?>

