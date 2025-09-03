<?php session_start(); ?>
<?php require 'includes/header.php'; ?>

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
<section class="lowerPage">
<h2>入力確認</h2>
<hr>

<?php
	echo '<form action="customerOutput.php" method="post" class="customers">';
	echo '<p>お名前<br><div class="confirm">' . htmlspecialchars($_POST['name']) . '</div></p>';
	echo '<p>お名前(フリガナ)<br><div class="confirm">' . htmlspecialchars($_POST['furigana']) . '</div></p>';
	echo '<p>郵便番号<br><div class="confirm">' . htmlspecialchars($_POST['postcode_a']) . ' - ' . htmlspecialchars($_POST['postcode_b']) . '</div></p>';
	echo '<p>住所<br><div class="confirm">' . htmlspecialchars($_POST['address']) . '</div></p>';
	echo '<p>メールアドレス<br><div class="confirm">' . htmlspecialchars($_POST['mail']) . '</div></p>';
	echo '<p>メールアドレス確認用<br><div class="confirm">' . htmlspecialchars($_POST['mail']) . '</div></p>';
	echo '<p>パスワード<br><div class="confirm">' . htmlspecialchars($_POST['password']) . '</div></p>';
	echo '<p>パスワード確認用<br><div class="confirm">' . htmlspecialchars($_POST['password']) . '</div></p>';

	echo '<input type="hidden" name="name" value="' . htmlspecialchars($_POST['name']) . '">';
	echo '<input type="hidden" name="furigana" value="' . htmlspecialchars($_POST['furigana']) . '">';
	echo '<input type="hidden" name="postcode_a" value="' . htmlspecialchars($_POST['postcode_a']) . '">';
	echo '<input type="hidden" name="postcode_b" value="' . htmlspecialchars($_POST['postcode_b']) . '">';
	echo '<input type="hidden" name="address" value="' . htmlspecialchars($_POST['address']) . '">';
	echo '<input type="hidden" name="mail" value="' . htmlspecialchars($_POST['mail']) . '">';
	echo '<input type="hidden" name="password" value="' . htmlspecialchars($_POST['password']) . '">';
	echo '<p><input type="submit" value="登録する"></p>';
	echo '</form>';
?>

</section>
<?php require 'includes/footer.php'; ?>