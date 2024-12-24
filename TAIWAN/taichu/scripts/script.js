'use strict'

// 以下のコードをコピペするか
// まだスクリプトファイルがない場合はこのまま使ってください
// （モーダルウィンドウは下に書けばOKです）


// ////////////////////////ハンバーガーメニュー/////////////////////////////

// 変数の宣言
const hanNavOpen = document.querySelector('.hanNavOpen');
const hanNav = document.querySelector('.hanNav');
const batu = document.querySelector('.batu');

// 三のボタンをクリックしたときに動かす関数
hanNavOpen.addEventListener('click', function() { // 指定した要素がクリックされた時に
    hanNav.classList.toggle("open");              // 指定した要素にopenクラスを追加(付け外し)
    hanNavOpen.classList.toggle("openDel");       // 三の画像を一時的に消去
    console.log('ok')
});

// 閉じるボタンが押された時に動かす関数
    batu.addEventListener('click', function() { // 指定した要素がクリックされた時に
    hanNav.classList.toggle("open");            // 指定した要素のopenクラスを削除(付け外し)
    hanNavOpen.classList.toggle("openDel");     // 三の画像を表示
    console.log('ok')
});


// /////////////////////////ローディング画面///////////////////////////////

const loadLogo = document.getElementById("loading");

window.onclick = function () {                           //ウィンドウのどこかがクリックされた時に
    loadLogo.classList.add("loaded");                    //ロード画面を透明にし非表示にする
  };

// /////////////////////////////ここまで//////////////////////////////

