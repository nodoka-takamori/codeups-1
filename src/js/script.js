jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる
  $(".hamburger").on("click", function () {
    $(this).toggleClass("is-active"); // ハンバーガーメニューのアイコンを変化させる
    $(".js-sp-nav").toggleClass("is-active"); // メニューの表示/非表示を切り替える
    return false;
  });

  var swiper = new Swiper(".mySwiper", {
    autoplay: {
      delay: 2000, // 2秒ごとにスライド
      disableOnInteraction: false, // ユーザー操作後も自動再生を継続
    },
    loop: true, // スライドをループさせる
    effect: "fade", // フェードエフェクトを追加
    fadeEffect: {
      crossFade: true, // ふんわりと切り替わる効果
    },
    speed: 3000, // 切り替えの速度を1秒に設定
  });

  // var box = $(".colorbox"),
  //     speed = 700;

  // box.each(function () {
  //   var color = $(this).find(".color"),
  //       image = $(this).find("img");
  //   var counter = 0;

  //   // inviewイベントを使って色が画面に現れたら処理をする
  //   color.on("inview", function () {
  //     if (counter === 0) {
  //       color.css("width", "100%"); // 色の幅を100%に広げる
  //       setTimeout(function () {
  //         image.css("opacity", "1"); // 画像を表示
  //         color.css("width", "0%"); // 色を再び縮小
  //       }, speed);
  //       counter = 1;
  //     }
    // });
  // });
});
