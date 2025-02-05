<?php include 'header.php'; ?>
<p>ようこそ　ゲスト様</p>
        <img src="images/hero.jpg" olt="">
        
        <!------ お知らせ 開始 ------>
        <div class="inner">
            <div class="donutGp01">
                <img src="images/pc01.jpg" olt="新商品サマーシトラス">
                <img src="images/pc02.jpg" olt="">
            </div>
            
            <img src="images/pc03.jpg" olt="" class="imagesPc03">
        </div>
        <!------ お知らせ 終了 ------>


        <!------ 信念のエリア 開始 ------>
        <div class="div02">
            <div class="tx02">
                <h2>Philosophy</h2>
                <p class="p01">私たちの信念</p>
                <p class="p02">"Creating Connections"</p>
                <p>「ドーナツでつながる」</p>
            </div>
        </div>
        <!------ 信念のエリア 終了 ------>

        <!------ ランキング 開始 ------>
        <section class="inner">
            <h2>人気ランキング</h2>
            
            <div class="donutGp02">
                <div class="doBox">
                    <p><span>1</span></p>
                    <p><img src="images/ccDo.jpg" alt=""></p>
                    <p>CCドーナツ 当店オリジナル（5個入り）</p>
                    <p>税込  ￥1,500</p>
                    <p>
                        <form action="cart.php" method="post">
                            <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                            <span class="cart-button">
                            <input type="submit" value="カートに入れる">
                            </span>
                        </form>
                    </p>
                </div>

                <div class="doBox">
                    <p><span>2</span></p>
                    <p><img src="images/fruit12.jpg" alt=""></p>
                    <p>フルーツドーナツセット（12個入り）</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>3</span></p>
                    <p><img src="images/fruit14.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>4</span></p>
                    <p><img src="images/choco.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>5</span></p>
                    <p><img src="images/bestSelect.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>6</span></p>
                    <p><img src="images/strbCrush.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>
            </div>
        </section>
        <!------ ランキング 終了 ------>
        


        <!------ 〇〇のエリア 開始 ------>
        <!------ 〇のエリア 終了 ------>

        
        <?php include 'footer.php'; ?>