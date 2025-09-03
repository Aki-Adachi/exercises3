<?php require 'includes/header.php'?>
<div class="nav"><a href="index.php">TOP</a> ＞ <a href="loginInput.php">ログイン</a></div>
<hr>

<div class="lowerPage">
<?php
if (isset($_SESSION['customer'])) {
	unset($_SESSION['customer']);
	echo '<div class="frame">';
	echo 'ログアウトしました。';
	echo '</div>';
	echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
	echo '<a href="loginInput.php" class="lowerPageLink">ログイン画面へ戻る</a>';
} else {
	echo '<div class="frame">';
	echo 'すでにログアウトしています。';
	echo '</div>';
	echo '<a href="loginInput.php" class="lowerPageLink">ログイン画面へ進む</a>';
	echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
}
?>
</div>
<?php require 'includes/footer.php'?>