jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

  // ハンバーガーメニュー
  $(".header__hamburger").on("click", function () {
    $(this).toggleClass("is-active");
    $(".js-sp-nav").toggleClass("is-active");

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
    header.classList.toggle("is-active");
  });

  // トップページfvのSwiper
  var swiper = new Swiper(".js-fv-Swiper", {
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    loop: true,
    effect: "fade",
    fadeEffect: {
      crossFade: true,
    },
    speed: 3000,
  });

  //トップページcampaignセクションのSwiper
  var swiper = new Swiper(".js-campaign-Swiper", {
    loop: true,
    speed: 2000,
    slidesPerView: "auto",
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
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

  //blogページのアーカイブトグル
  const toggleItems = document.querySelectorAll(".js-archive__toggle"); // クリックして開閉するトグル要素を取得

  toggleItems.forEach((item) => {
    item.addEventListener("click", function (event) {
      event.preventDefault();
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

  //faqのアコーディオン
  $(".js-menu").on("click", function () {
    $(this).toggleClass("close");
    $(this).next(".faq__answer").slideToggle();
  });

  // Aboutページ モーダル関連の要素を取得
  const modal = document.getElementById("js-modal");
  const modalImg = document.getElementById("js-modal-img");
  const modalOpenElements = document.querySelectorAll(".gallery__photo");
  const modalClose = document.getElementById("js-modal__close");

  // モーダルが開いている時の後ろ スクロールを制御する関数
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
    if (event.target === modal || event.target === modalImg) {
      modal.style.display = "none"; // モーダルを閉じる
      toggleBodyLock(false); // スクロールを再度有効化
    }
  });
});

//Informationページ タブ切り替え
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".tab__name");
  const contents = document.querySelectorAll(".tab__content");

  const HEADER_HEIGHT = 90; // ヘッダーの高さを設定
  // タブをアクティブにする関数
  function activateTab(index) {
    // すでにアクティブなタブとコンテンツからクラスを削除
    document
      .querySelector(".tab__name.is-change")
      .classList.remove("is-change");
    document.querySelector(".tab__content.is-show").classList.remove("is-show");

    // 対応するタブとコンテンツにクラスを追加
    tabs[index].classList.add("is-change");
    contents[index].classList.add("is-show");

    // 対象のタブ要素のスクロール位置を調整
    const tabElement = tabs[index];
    const tabPosition =
      tabElement.getBoundingClientRect().top +
      window.pageYOffset -
      HEADER_HEIGHT;
    window.scrollTo({
      top: tabPosition,
      behavior: "smooth", // スムーズスクロール
    });
  }

  // 各タブにクリックイベントを追加
  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function (event) {
      event.preventDefault(); // デフォルトのリンク動作を無効化
      activateTab(index); // クリックされたタブをアクティブにする
    });
  });

  //Footerで選んだタブに着地
  // ページ読み込み時、またはハッシュ変更時にタブをアクティブにする
  function checkHash() {
    const hash = window.location.hash;
    if (hash === "#tab3") {
      activateTab(2); // "体験ダイビング"のタブをアクティブにする
    } else if (hash === "#tab1") {
      activateTab(0); // "ライセンス講習"のタブをアクティブにする
    } else if (hash === "#tab2") {
      activateTab(1); // "ファンダイビング"のタブをアクティブにする
    }
  }

  // ページ初期読み込み時にハッシュを確認
  checkHash();

  // ハッシュが変更されたときにタブをチェック
  window.addEventListener("hashchange", checkHash);
});

document.addEventListener("DOMContentLoaded", function () {
  const HEADER_HEIGHT = 90; // ヘッダーの高さを設定
  const links = document.querySelectorAll('a[href^="#"]'); // ハッシュリンクをすべて取得

  // ページが読み込まれた後、ヘッダーの高さを考慮してスクロール位置を調整
  function adjustScrollPosition() {
    const hash = window.location.hash; // 現在のハッシュを取得
    if (hash) {
      const targetElement = document.querySelector(hash);
      if (targetElement) {
        const elementPosition =
          targetElement.getBoundingClientRect().top +
          window.pageYOffset -
          HEADER_HEIGHT;
        window.scrollTo({
          top: elementPosition,
          behavior: "smooth", // スムーズなスクロール
        });
      }
    }
  }

  // ハッシュリンクをクリックしたときに位置を調整
  links.forEach((link) => {
    link.addEventListener("click", function (event) {
      const targetId = this.getAttribute("href").split("#")[1];
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        event.preventDefault(); // デフォルトのリンク動作を無効化
        const elementPosition =
          targetElement.getBoundingClientRect().top +
          window.pageYOffset -
          HEADER_HEIGHT;
        window.scrollTo({
          top: elementPosition,
          behavior: "smooth",
        });
        // ハッシュをURLにセット
        window.history.pushState(null, null, `#${targetId}`);
      }
    });
  });

  // ページ読み込み時にハッシュがある場合にスクロール位置を調整
  adjustScrollPosition();

  // ハッシュが変更されたとき（例えば手動でURLにハッシュを追加した場合）も対応
  window.addEventListener("hashchange", adjustScrollPosition);
});
