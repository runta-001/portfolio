<?php include 'header.php'; ?>
<p>ようこそ　ゲスト様</p>
        <!------ ランキング 開始 ------>
        <section class="inner">
            <h2>商品一覧</h2>
            
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
                    <p><img src="images/choco.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>3</span></p>
                    <p><img src="images/caramel.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>4</span></p>
                    <p><img src="images/plain.jpg" alt=""></p>
                    <p>ドーナツ名</p>
                    <p>税込  ￥3,500</p>
                    <p><input type="submit" value="カートに入れる"></p>
                </div>

                <div class="doBox">
                    <p><span>5</span></p>
                    <p><img src="images/citrus.jpg" alt=""></p>
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
        <?php include 'footer.php'; ?>