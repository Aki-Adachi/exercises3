<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="common/reset.css">
<link rel="stylesheet" href="styles/common.css">
<link rel="stylesheet" href="styles/index.css">
<link rel="stylesheet" href="styles/products.css">
<link rel="stylesheet" href="styles/detail.css">
<link rel="stylesheet" href="styles/login.css">
<link rel="stylesheet" href="styles/customers.css">
<link rel="stylesheet" href="styles/cart.css">
<title>C.C.Donuts</title>
</head>
<body>
    <header>
        <!-- チェックボックスで制御 -->
        <input type="checkbox" id="menu-toggle">

        <!-- ハンバーガーアイコン -->
        <label for="menu-toggle" class="hamburger">
        <span></span>
        <span></span>
        <span></span>
        </label>

        <!-- メニュー -->
        <div class="slideMenu">
            <label for="menu-toggle" class="closeBtn">✕</label>
            <img src="images/spLogo.png" class="sp">
            <img src="images/pcLogo.png" class="pc">
            <ul>
                <li><a href="index.php">TOP</a></li>
                <li><a href="products.php">商品一覧</a></li>
                <li><a href="index.php">よくある質問</a></li>
                <li><a href="index.php">お問い合わせ</a></li>
                <li><a href="index.php">当サイトのポリシー</a></li>
            </ul>
        </div>
        <div class="header">
            <div class="menu">
                <img src="images/spLogo.png" class="sp">
                <img src="images/pcLogo.png" class="pc">
                <a href="loginInput.php"><img src="images/spLogin.png" class="sp"></a>
                <a href="loginInput.php"><img src="images/pcLogin.png" class="pc"></a>
                <a href="cart.php"><img src="images/spCart.png" class="sp"></a>
                <a href="cart.php"><img src="images/pcCart.png" class="pc"></a>
            </div>
            <div class="search">
                <form action="index.php" method="post">
                    <input type="image" src="images/spSearch.png" alt="検索"  class="sp">
                    <input type="image" src="images/pcSearch.png" alt="検索"  class="pc">
                    <input type="text" name="keyword">
                </form>
            </div>
        </div>
    </header>
    <main>