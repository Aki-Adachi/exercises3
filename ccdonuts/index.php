<?php session_start(); ?>
<?php require 'includes/header.php'?>

<p class="welcome">
<?php
  if (isset($_SESSION['customer'])) {
    echo 'ようこそ　', htmlspecialchars($_SESSION['customer']['name']) . ' 様';
  } else {
    echo 'ようこそ　ゲスト様';
  }
?>
</p>

<section class="section1">
    <img src="images/spHero.png" class="sp">
    <img src="images/pcHero.png" class="pc">
</section>
<section class=link>
    <div class=linkImg>
    <a href="detail.php?id=5" rel=""><img src="images/spNew.png" class="sp" style="margin:0 auto;"></a>
    <img src="images/pcNew.png" class="pc" style="margin:0 auto;"></a>
    <img src="images/spLife.png" class="sp"></a>
    <img src="images/pcLife.png" class="pc"></a>
    </div>
    <a href="products.php" rel=""><img src="images/spProductList.png" class="sp" style="margin:0 auto;"></a>
    <a href="products.php" rel="商品一覧"><img src="images/pcProductList.png" class="pc" style="margin:0 auto;"></a>
</section>
<section class="philosophy">
    <h2>Philosophy</h2>
    <h3>私たちの信念</h3>

    <p class="connect">"Creating Connections"</p>
    <h3>ドーナツでつながる</h3>

</section>
<section class="section4">
    <h2>人気ランキング</h2>
    <hr>
    <div  class="ranking">
    <article class="rankingArticle">
        <img src="images/spRank1.png" class="sp">
        <img src="images/pcRank1.png" class="pc">
        <a href="detail.php?id=1"><img src="images/spTopDonuts.png" class="sp"></a>
        <a href="detail.php?id=1"><img src="images/pcTopDonuts.png" class="pc"></a>
        <p>CCドーナツ 当店オリジナル（5個入り）</p>
        <p class="tax">税込 ￥1,500</p>
        <form method="post" action="cart.php">
            <input type="hidden" name="id" value="1">
            <input type="hidden" name="name" value="当店オリジナルのドーナッツ5個入り">
            <input type="hidden" name="price" value="1500">
            <input type="hidden" name="count" value="1">
            <input type="submit" value="カートに入れる" class="inCart">
        </form>
    </article>
        <article class="rankingArticle" >
            <img src="images/spRank2.png" class="sp">
            <img src="images/pcRank2.png" class="pc">
            <a href="detail.php?id=7" rel=""><img src="images/spTopAssortment12.png" class="sp"></a>
            <a href="detail.php?id=7" rel=""><img src="images/pcTopAssortment12.png" class="pc"></a>
            <p>フルーツドーナツセット（12個入り）</p>
            <p class="tax">税込  ￥3,500</p>
            <form method="post" action="cart.php">
            <input type="hidden" name="id" value="7">
            <input type="hidden" name="name" value="フルーツドーナツセットの12個入り">
            <input type="hidden" name="price" value="3500">
            <input type="hidden" name="count" value="1">
            <input type="submit" value="カートに入れる" class="inCart">
            </form>
        </article>
        <article class="rankingArticle" >
            <img src="images/spRank3.png" class="sp">
            <img src="images/pcRank3.png" class="pc">
            <a href="detail.php?id=8" rel=""><img src="images/spTopAssortment14.png" class="sp"></a>
            <a href="detail.php?id=8" rel=""><img src="images/pcTopAssortment14.png" class="pc"></a>
            <p>フルーツドーナツセット（14個入り）</p>
            <p class="tax">税込  ￥4,000</p>
            <form method="post" action="cart.php">
            <input type="hidden" name="id" value="8">
            <input type="hidden" name="name" value="フルーツドーナツセット14個入り">
            <input type="hidden" name="price" value="4000">
            <input type="hidden" name="count" value="1">
            <input type="submit" value="カートに入れる" class="inCart">
            </form>
        </article>
        <article class="rankingArticle" >
            <img src="images/spRank4.png" class="sp">
            <img src="images/pcRank4.png" class="pc">
            <a href="detail.php?id=2" rel=""><img src="images/spChocolate.png" class="sp"></a>
            <a href="detail.php?id=2" rel=""><img src="images/pcChocolate.png" class="pc"></a>
            <p>チョコレートデライト（5個入り）</p>
            <p class="tax">税込  ￥1,600</p>
            <form method="post" action="cart.php">
            <input type="hidden" name="id" value="2">
            <input type="hidden" name="name" value="チョコレートデライト5個入り">
            <input type="hidden" name="price" value="1600">
            <input type="hidden" name="count" value="1">
            <input type="submit" value="カートに入れる" class="inCart">
            </form>
        </article>
        <article class="rankingArticle" >
            <img src="images/spRank5.png" class="sp">
            <img src="images/pcRank5.png" class="pc">
            <a href="detail.php?id=9" rel=""><img src="images/spBestSelectionBox.png" class="sp"></a>
            <a href="detail.php?id=9" rel=""><img src="images/pcBestSelectionBox.png" class="pc"></a>
            <p>ベストセレクションボックス（4個入り）</p>
            <p class="tax">税込  ￥1,200</p>
            <form method="post" action="cart.php">
            <input type="hidden" name="id" value="9">
            <input type="hidden" name="name" value="ベストセレクションボックス4個入り">
            <input type="hidden" name="price" value="1200">
            <input type="hidden" name="count" value="1">
            <input type="submit" value="カートに入れる" class="inCart">
            </form>
        </article>
        <div class="rankingArticle" >
            <img src="images/spRank6.png" class="sp">
            <img src="images/pcRank6.png" class="pc">
            <a href="detail.php?id=6" rel=""><img src="images/spStrawberry.png" class="sp"></a>
            <a href="detail.php?id=6" rel=""><img src="images/pcStrawberry.png" class="pc"></a>
            <p>ストロベリークラッシュ（5個入り）</p>
            <p class="tax">税込  ￥1,800</p>
            <form method="post" action="cart.php">
            <input type="hidden" name="id" value="6">
            <input type="hidden" name="name" value="ストロベリークラッシュ5個入り">
            <input type="hidden" name="price" value="1800">
            <input type="hidden" name="count" value="1">
            <input type="submit" value="カートに入れる" class="inCart">
            </form>
        </article>
    </div>
</section>
<?php require 'includes/footer.php'?>