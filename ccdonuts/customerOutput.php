<?php session_start(); ?>
<?php require 'includes/header.php'; ?>

<div class="nav"><a href="">TOP</a> ＞ <a href="">入力確認</a></div>
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

<?php
$pdo=new PDO('mysql:host=localhost;dbname=ss367069_ccdonuts;charset=utf8', 'ss367069_adachi', '12345asdfg');
if (isset($_SESSION['customers'])) {
	$id=$_SESSION['customers']['id'];
	$sql=$pdo->prepare('select * from customers where id!=? and mail=?');
	$sql->execute([$id, $_REQUEST['mail']]);
} else {
	$sql=$pdo->prepare('select * from customers where mail=?');
	$sql->execute([$_REQUEST['mail']]);
}
if (empty($sql->fetchAll())) {
	if (isset($_SESSION['customers'])) {
		$sql=$pdo->prepare('update customers set name=?, furigana=?, postcode_a=?, postcode_b=?, address=?, mail=?, password=? where id=?');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['furigana'], $_REQUEST['postcode_a'], $_REQUEST['postcode_b'], $_REQUEST['address'], 
			$_REQUEST['mail'], $_REQUEST['password'], $id]);
		$_SESSION['customers']=[
			'id'=>$id, 'name'=>$_REQUEST['name'], 'furigana'=>$_REQUEST['furigana'], 'postcode_a'=>$_REQUEST['postcode_b'], 
			'address'=>$_REQUEST['address'], 'mail'=>$_REQUEST['mail'], 
			'password'=>$_REQUEST['password']];
		echo '<section class="lowerPage">';
		echo '<h2>会員情報更新完了</h2>';
		echo '<hr>';
		echo '<div class="frame">';
		echo 'お客様情報を更新しました。';
        echo '</div>';
        echo '<a href="cart.php" class="lowerPageLink">購入確認ページへ進む</a>';
        echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
		echo '</section>';
	} else {
		$sql=$pdo->prepare('insert into customers values(null,?,?,?,?,?,?,?)');
		$sql->execute([
			$_REQUEST['name'], $_REQUEST['furigana'], $_REQUEST['postcode_a'], $_REQUEST['postcode_b'], $_REQUEST['address'], 
			$_REQUEST['mail'], $_REQUEST['password']]);
		echo '<section class="Page">';
		echo '<h2>会員登録完了</h2>';
		echo '<hr>';
		echo '<div class="frame">';
        echo '会員登録が完了しました。<br>';
		echo '<a href="loginInput.php" style="text-decoration:underline;">ログインページ</a>へお進みください。<br>';
        echo '</div>';
        echo '<a href="cardInput.php" class="lowerPageLink">クレジットカード登録へすすむ</a>';
        echo '<a href="cart.php" class="lowerPageLink">購入確認ページへすすむ</a>';
		echo '</section>';
	}
	} else {
		echo '<section class="lowerPage">';
		echo '<h2>入力確認</h2>';
		echo '<hr>';
		echo '<div class="frame">';
		echo 'メールアドレスがすでに使用されていますので変更してください。<br><br>';
		echo '<p style="margin-top:20px;">会員登録がお済みの方は<a href="loginInput.php"  class="memberRegistration">こちら</a>からログインしてください。</p>';
		echo '</div>';
		echo '<a href="customerInput.php" class="lowerPageLink">会員登録入力ページへ戻る</a>';
		echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
		echo '</section>';
	}
?>
<?php require 'includes/footer.php'; ?>