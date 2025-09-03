<?php session_start(); ?>
<?php require 'includes/header.php'?>
<link rel="stylesheet" href="styles/customers.css">
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
<hr>
<section class="lowerPage">
<h2>会員登録</h2>
<hr>

<?php
    $id=$name=$furigana=$postcode_a=$postcode_b=$address=$mail=$password='';
    if (isset($_SESSION['customer'])) {
        $id = $_SESSION['customer']['id'];
        $name = $_SESSION['customer']['name'];
        $furigana = $_SESSION['customer']['furigana'];
        $postcode_a = $_SESSION['customer']['postcode_a'];
        $postcode_b = $_SESSION['customer']['postcode_b'];
        $address = $_SESSION['customer']['address'];
        $mail = $_SESSION['customer']['mail'];
        $password = $_SESSION['customer']['password'];
    }
    echo '<form action="customerConfirm.php" method="post" class="customers">';
    echo '<label for="name">お名前<span class="label">(必須)</span></label>';
    echo '<input type="text" name="name" value="', htmlspecialchars($name), '" placeholder="山田　太郎" required>';
    echo '<label for="name">お名前(フリガナ)<span class="label">(必須)</span></label>';
    echo '<input type="text" name="furigana" value="', htmlspecialchars($furigana), '" placeholder="ヤマダ　タロウ" required>';
    echo '<label for="name">郵便番号<span class="label">(必須)</span></label>';
    echo '<div class="postcode"><input type="text" name="postcode_a" value="', htmlspecialchars($postcode_a), '" pattern="^[0-9]{3}$" title="3桁の数字を入力してください" style="width: 60px;" placeholder="123" required>';
    echo '<input type="text" name="postcode_b" value="', htmlspecialchars($postcode_b), '" pattern="^[0-9]{4}$" title="4桁の数字を入力してください" style="width: 100px; margin-left:4px;" placeholder="4567" required></div>';
    echo '<label for="name">住所<span class="label">(必須)</span></label>';
    echo '<input type="text" name="address" value="', htmlspecialchars($address), '" required>';
    echo '<label for="name">メールアドレス<span class="label">(必須)</span></label>';
    echo '<input type="text" name="mail" value="', htmlspecialchars($mail), '" pattern="^[^@]+@[^@]+\.[^@]+$" required title="正しいメールアドレス形式で入力してください（例: ○○○@○○○）" required>';
    echo '<label for="name">メールアドレス確認用<span class="label">(必須)</span></label>';
    echo '<input type="text" name="mail" value="', htmlspecialchars($mail), '" pattern="^[^@]+@[^@]+\.[^@]+$" required title="正しいメールアドレス形式で入力してください（例: ○○○@○○○）" required>';
    echo '<label for="name">パスワード<span class="label">(必須)</span></label>';
    echo '<div class="caution">半角英数字8文字以上20文字以内で入力してください。※記号の使用はできません</div>';
    echo '<input type="password" name="password" value="', htmlspecialchars($password), '" pattern="^[a-zA-Z0-9]{8,20}$" required title="半角英数字8～20文字で入力してください（記号不可）" required>';
    echo '<label for="name">パスワード確認用<span class="label">(必須)</span></label>';
    echo '<input type="password" name="password" value="', htmlspecialchars($password), '" pattern="^[a-zA-Z0-9]{8,20}$" required title="半角英数字8～20文字で入力してください（記号不可）" required>';
    echo '<input type="submit" value="入力確認する">';
      echo '<a href="index.php" class="lowerPageLink">トップページへ戻る</a>';
    echo '</form>';
?>
<?php require 'includes/footer.php'?>

</section>