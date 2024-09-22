jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  $(".hamburger").on("click", function () {
    $(this).toggleClass("is-active"); // ハンバーガーメニューのアイコンを変化させる
    $(".js-sp-nav").toggleClass("is-active"); // メニューの表示/非表示を切り替える

    // bodyタグに「is-locked」クラスを追加/削除してスクロールを無効化
    if ($(".js-sp-nav").hasClass("is-active")) {
      $("body").addClass("is-locked");
    } else {
      $("body").removeClass("is-locked");
    }
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


  var swiper = new Swiper(".campaignSwiper", {
    loop: true, // スライドをループ
    speed: 2000, // 切り替え速度
    slidesPerView: "auto", // スライドを自動調整
    autoplay: {
      delay: 4000, // 4秒ごとに自動再生
      disableOnInteraction: false, // ユーザー操作後も自動再生
      waitForTransition: false,
    },
    navigation: {
      nextEl: '.swiper-button-next', // 右ボタン
      prevEl: '.swiper-button-prev', // 左ボタン
    },
  });



  $(document).ready(function () {
    // 要素の取得とスピードの設定
    let box = $(".js-colorbox"),
        speed = 700;
    // .colorboxの付いた全ての要素に対して下記の処理を行う
    box.each(function () {
        $(this).append('<div class="is-color"></div>');
        var color = $(this).find($(".is-color")),
            image = $(this).find("img");
        var counter = 0;
        image.css("opacity", "0");
        color.css("width", "0%");
        // スクロールイベントで背景色が画面に現れたかどうかチェック
        $(window).on("scroll", function () {
            var windowBottom = $(window).scrollTop() + $(window).height();
            var colorTop = color.offset().top;
            if (windowBottom > colorTop && counter == 0) {
                color.delay(200).animate({ width: "100%" }, speed, function () {
                    image.css("opacity", "1");
                    $(this).css({ left: "0", right: "auto" });
                    $(this).animate({ width: "0%" }, speed);
                });
                counter = 1;
            }
        });
    });
});


  var pagetop = $("#button__top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });
});

