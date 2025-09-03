<?php session_start(); ?>
<?php require 'includes/header.php'?>
<div class="nav"><a href="index.php">TOP</a> ＞ <a href="">ログイン</a></div>
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
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=localhost;dbname=ss367069_ccdonuts;charset=utf8', 'ss367069_adachi', '12345asdfg');
$sql=$pdo->prepare('select * from customers where mail=? and password=?');
$sql->execute([$_REQUEST['mail'], $_REQUEST['password']]);
foreach ($sql as $row) {
	$_SESSION['customer']=[
		'id'=>$row['id'], 'name'=>$row['name'], 'furigana'=>$row['furigana'],
		'postcode_a'=>$row['postcode_a'],'postcode_b'=>$row['postcode_b'],
		'address'=>$row['address'], 'mail'=>$row['mail'], 
		'password'=>$row['password']];
}
if (isset($_SESSION['customer'])) {
	echo '<h2>ログイン完了</h2><br><hr>';
	echo '<div class=frame>';
	echo 'ログインが完了しました。<br><br>';
	echo '引き続きお楽しみください。<br>';
	echo '</div>';
	echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
	echo '<a href="logoutInput.php" class="lowerPageLink">ログアウトする</a>';
} else {
	echo '<div class=frame>';
	echo 'ログイン名またはパスワードが違います。<br>';
	echo '<a href="customerInput.php" class="lowerPageLink memberRegistration">会員登録がまだの方はこちら</a><br>';
	echo '</div>';
	echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
	echo '<a href="loginInput.php" class="lowerPageLink">ログイン画面へ戻る</a>';
}
?>
</section>

<?php require 'includes/footer.php'?>