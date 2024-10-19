jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  $(".header__hamburger").on("click", function () {
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

  // ハンバーガーメニューとヘッダーの要素を取得
  const hamburger = document.getElementById("hamburger");
  const header = document.querySelector(".header");

  // ハンバーガーメニューがクリックされたときの処理
  hamburger.addEventListener("click", function () {
    // headerにis-activeクラスをトグル（追加/削除）する
    header.classList.toggle("is-active");
  });

  // トップページfvのSwiper
  var swiper = new Swiper(".js-fv-Swiper", {
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

  //トップページcampaignセクションのSwiper
  var swiper = new Swiper(".js-campaign-Swiper", {
    loop: true, // スライドをループ
    speed: 2000, // 切り替え速度
    slidesPerView: "auto", // スライドを自動調整
    autoplay: {
      delay: 4000, // 4秒ごとに自動再生
      disableOnInteraction: false, // ユーザー操作後も自動再生
      waitForTransition: false,
    },
    navigation: {
      nextEl: ".swiper-button-next", // 右ボタン
      prevEl: ".swiper-button-prev", // 左ボタン
    },
  });

  //写真の前に青の要素が出てくる実装
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

  //button-top
  var pagetop = $("#button-top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 80) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });

  //blogページのアーカイブの実装
  const toggleItems = document.querySelectorAll(".js-archive__toggle"); // クリックして開閉するトグル要素を取得

  // 各トグルアイテムにクリックイベントを追加
  toggleItems.forEach((item) => {
    item.addEventListener("click", function (event) {
      event.preventDefault(); // デフォルトのリンク動作を無効化

      // クリックされたアイテムにクラス 'open' を切り替える（矢印の向き）
      item.classList.toggle("open");

      // 月別項目を取得
      const months = item.nextElementSibling; // クリックされた次の兄弟要素

      // 月別アイテムが存在し、'aside__archive-item--month' の場合に処理
      if (months && months.classList.contains("aside__archive-item--month")) {
        let currentItem = months;

        // 次の月別アイテムが続く限り、'show' クラスのトグル処理
        while (
          currentItem &&
          currentItem.classList.contains("aside__archive-item--month")
        ) {
          currentItem.classList.toggle("show");
          currentItem = currentItem.nextElementSibling;
        }
      }
    });
  });

  //FAQページ、ドロワー
  const faqQuestions = document.querySelectorAll(".js-faq-close"); // 全てのFAQ質問要素を取得

  faqQuestions.forEach(function (question) {
    const answer = question.nextElementSibling; // 質問の次の要素（答え）

    // 最初に全ての質問を開いた状態にする
    question.classList.add("open");
    answer.classList.add("open");

    // 各質問にクリックイベントを追加
    question.addEventListener("click", function () {
      if (answer.classList.contains("open")) {
        // 答えを閉じる処理
        answer.classList.remove("open");
        question.classList.remove("open");
      } else {
        // 答えを開く処理
        answer.classList.add("open");
        question.classList.add("open");
      }
    });
  });

  // モーダル関連の要素を取得
  const modal = document.getElementById("js-modal");
  const modalImg = document.getElementById("js-modal__img");
  const modalOpenElements = document.querySelectorAll(".gallery__photo");
  const modalClose = document.getElementById("js-modal__close");

  // スクロールを制御する関数
  function toggleBodyLock(isLocked) {
    if (isLocked) {
      document.body.style.overflow = "hidden"; // スクロールを無効にする
    } else {
      document.body.style.overflow = ""; // スクロールを再度有効にする
    }
  }

  // 各画像クリックでモーダルを表示
  modalOpenElements.forEach((item) => {
    item.addEventListener("click", function () {
      const imgSrc = item.querySelector("img").src; // クリックされた画像のソースを取得
      modalImg.src = imgSrc; // モーダル内の画像に設定
      modal.style.display = "flex"; // モーダルを表示
      toggleBodyLock(true); // スクロールを無効化
    });
  });

  // モーダル外をクリックした場合にモーダルを閉じる
  modal.addEventListener("click", function (event) {
    if (event.target === modal) {
      modal.style.display = "none"; // モーダルを閉じる
      toggleBodyLock(false); // スクロールを再度有効化
    }
  });
});



document.addEventListener("DOMContentLoaded", function () {
  // すべてのタブ要素とコンテンツ要素を取得
  const tabs = document.querySelectorAll(".tab__name");
  const contents = document.querySelectorAll(".tab__content");

  // 各タブにクリックイベントを追加
  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function (event) {
      event.preventDefault(); // デフォルトのリンク動作を無効化

      // すでにアクティブなタブとコンテンツからクラスを削除
      document
        .querySelector(".tab__name.is-change")
        .classList.remove("is-change");
      document
        .querySelector(".tab__content.is-show")
        .classList.remove("is-show");

      // クリックされたタブにis-changeクラスを追加
      this.classList.add("is-change");

      // クリックされたタブに対応するコンテンツにis-showクラスを追加
      contents[index].classList.add("is-show");
    });
  });
});
