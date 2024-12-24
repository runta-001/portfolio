'use strict'

// モーダル
// 変数の宣言
const open = document.querySelector('.modal01'); //クリックする場所の変数
const open02 = document.querySelector('.modal002'); //クリックする場所の変数

const modal = document.querySelector('.modal'); //ウィンドウ背景の変数
const modalWin = document.querySelector('.modalWin'); //ウィンドウ本体の変数

const modal02 = document.querySelector('.modal02') 

const modalClose = document.querySelector('.closePhoto'); //ウィンドウを閉じるときの設定
const body = document.querySelector('.bodySec') //ボディにoverflow:hidden;を設定するための設定

open.addEventListener('click', function() {
    modal.style.display = 'block';
    modalWin.style.display = 'block';
    body.style.overflow = 'hidden';
});
open02.addEventListener('click', function() {
    modal.style.display = 'block';
    modal02.style.display = 'block';
    body.style.overflow = 'hidden';
});

modalClose.addEventListener('click', function() {
    modal.style.display = 'none';
    modalWin.style.display = 'none';
    body.style.overflow = 'auto';
});



// /////////////////////////ローディング画面///////////////////////////////

const loadLogo = document.getElementById("loading");

window.onclick = function () {                           //ウィンドウのどこかがクリックされた時に
    loadLogo.classList.add("loaded");                    //ロード画面を透明にし非表示にする
  };

// /////////////////////////////ここまで//////////////////////////////
