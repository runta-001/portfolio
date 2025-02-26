'use strict'

// スライド

// 変数の宣言
const photo = document.querySelector('.photo');
const left = document.getElementById('left');
const right = document.getElementById('right');
const icon01 = document.getElementById('icon01');
const icon02 = document.getElementById('icon02');
const icon03 = document.getElementById('icon03');
const icon04 = document.getElementById('icon04');
const icon05 = document.getElementById('icon05');

// 位置を決める変数の初期値
let i = 3;

// 変数によってクラスの付外し
function iconColor() {
    switch ( i ) {
        case 1:
            photo.classList.add("icon01Sec");
            photo.classList.remove("icon02Sec", "icon03Sec", "icon04Sec", "icon05Sec");
            icon01.classList.add("iconB");
            icon02.classList.remove("iconB");
            icon03.classList.remove("iconB");
            icon04.classList.remove("iconB");
            icon05.classList.remove("iconB");
        break;
        case 2:
            photo.classList.add("icon02Sec");
            photo.classList.remove("icon01Sec", "icon03Sec", "icon04Sec", "icon05Sec");
            icon01.classList.remove("iconB");
            icon02.classList.add("iconB");
            icon03.classList.remove("iconB");
            icon04.classList.remove("iconB");
            icon05.classList.remove("iconB");
        break;
        case 3:
            photo.classList.add("icon03Sec");
            photo.classList.remove("icon01Sec", "icon02Sec", "icon04Sec", "icon05Sec");
            icon01.classList.remove("iconB");
            icon02.classList.remove("iconB");
            icon03.classList.add("iconB");
            icon04.classList.remove("iconB");
            icon05.classList.remove("iconB");
        break;
        case 4:
            photo.classList.add("icon04Sec");
            photo.classList.remove("icon01Sec", "icon02Sec", "icon03Sec", "icon05Sec");
            icon01.classList.remove("iconB");
            icon02.classList.remove("iconB");
            icon03.classList.remove("iconB");
            icon04.classList.add("iconB");
            icon05.classList.remove("iconB");
        break;
        case 5:
            photo.classList.add("icon05Sec");
            photo.classList.remove("icon01Sec", "icon02Sec", "icon03Sec", "icon04Sec");
            icon01.classList.remove("iconB");
            icon02.classList.remove("iconB");
            icon03.classList.remove("iconB");
            icon04.classList.remove("iconB");
            icon05.classList.add("iconB");
        break;

    }
}

iconColor();

// アイコンがクリックされた時の処理

icon01.addEventListener('click', function() {
    i = 1;
    iconColor();
    // console.log('ok') テスト用
});

icon02.addEventListener('click', function() {
    i = 2;
    iconColor();
    // console.log('ok') テスト用
});
icon03.addEventListener('click', function() {
    i = 3;
    iconColor();
    // console.log('ok') テスト用
});
icon04.addEventListener('click', function() {
    i = 4;
    iconColor();
    // console.log('ok') テスト用
});
icon05.addEventListener('click', function() {
    i = 5;
    iconColor();
    // console.log('ok') テスト用
});

// 左右のボタンが押された時の処理
// 既定の数値より少ないか多い場合は回り込ませる

left.addEventListener('click', function() {
    if( i > 1 && i <= 5 ) {
        i = i - 1;
    } else if (i = 1 ) {
        i = 5;
    };
    iconColor();
    // console.log(i) テスト用
});
    right.addEventListener('click', function() {
        if( i >= 1 && i < 5 ) {
           i = i + 1;
        } else if (i = 6) {
            i = 1;
        };
        iconColor();
    // console.log(i) テスト用
});

// ハンバーガーメニュー
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


// ローディング画面
const loadLogo = document.getElementById("loading");

window.onclick = function () {                           //ウィンドウのどこかがクリックされた時に
    loadLogo.classList.add("loaded");                    //ロード画面を透明にし非表示にする
  };

