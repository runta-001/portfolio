<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <!-- viewportの記述/様々なデバイスの画面サイズに合わせて適切に表示されるようにする -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- リセットCSS -->
        <link rel="stylesheet" href="common/reset.css">

        <!-- ブートストラップのCDN
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> -->

        <!-- web Googleフォント Noto Sans Japanese -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Sriracha&display=swap" rel="stylesheet">

        <!-- スタイル.css -->
        <link rel="stylesheet" href="styles/style.css">

        <!-- ファビコン -->
        <link rel="icon" href="images/favicon.svg" type="image/svg+xml">

        <title>C.C.Donuts</title>
    </head>

    <body>
        <header class="header">
            <div class="hdInner">
                <div class="hdLink">

        <!-- ハンバーガーメニュー　開始 -->
        <div class="headerContainer">
            <input type="checkbox" id="check">
            <label for="check" class="hamburger">
              <span></span>
            </label>
            <nav class="nav">
            <ul class="nav__lIst">
              <li class="nav__item"><a href="index.php">TOP</a></li>
              <li class="nav__item"><a href="products.php">商品一覧</a></li>
              <li class="nav__item"><a href="#">よくある質問</a></li>
              <li class="nav__item"><a href="#">問い合わせ</a></li>
              <li class="nav__item"><a href="#">当サイトのポリシー</a></li>
            </ul>
            </nav>
        </div>
          <!-- ハンバーガーメニュー　終了 -->
           
           <!-- ヘッダーロゴ --> 
            <div class="headerLogo">
                <a href="index.php">
                    <img src="images/spLogoHeader.png" olt="ccdonutsロゴ" class="ccLogoHd">
                </a>
            </div>

                    
                    <div class="headerMenuRight">
                        <ul>
                            <li><a class="headerNaviIcons headerNaviLogin" href="#"><img src="images/spLogIco.png" olt="" ></a></li>
                            <li id="globalMenuCart"><a href="#"><img src="images/spCartIco.png" olt="" class="headerNaviCart"></a></li>
                        </ul>
                    </div>
                </div>

    

    <form action="search.php" method="get">
        <input type="image" src="images/searchIco.png" alt="検索 "class="searchIcon">
        <input type="text" name="keyword" class="searchBox">
    </form>
        </div><!-- hdInner 終了 -->


    </header>
    <main>