<?php require 'includes/header.php'?>

<a href="">TOP</a>＞<a href=""><商品一覧</a>
<p class="welcome">ようこそ　ゲスト様</p>

<?php

$pdo=new PDO('mysql:host=localhost;dbname=ss367069_ccdonuts;charset=utf8', 'ss367069_adachi', '12345asdfg');

foreach ($pdo->query('select * from products') as $row) {
	echo '<p>';
	echo $row['id'], ':';
	echo $row['name'], ':';
	echo $row['price'];
	echo '</p>';
}

?>
<?php require 'includes/footer.php'?>