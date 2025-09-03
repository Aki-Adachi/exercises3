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

<h2>ログイン</h2>
<hr class="line">

<form action="loginOutput.php" method="post" class="frame login">
<span style="text-align:left;">メールアドレス</span><br><input type="mail" name="mail"><br>
<span style="text-align:left;">パスワード</span><br><input type="password" name="password"><br>
<input type="submit" value="ログインする">
<a href="customerInput.php" class="lowerPageLink memberRegistration">会員登録がまだの方はこちら</a>
</form>
<a href="index.php" class="lowerPageLink">トップページへ戻る</a>
</section>
<?php require 'includes/footer.php'?>
