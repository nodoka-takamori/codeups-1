<?php
function my_setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // titleタグ自動生成
    add_theme_support('html5', array( // HTML5による出力
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_setup');

/* CSSとJavaScriptの読み込み */
function my_script_init() {
    // WordPressに含まれているjQueryを読み込まない
    wp_deregister_script('jquery');

    // Googleフォントの読み込み
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Gotu&family=Lato:wght@400;700&family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

    // メインCSSの読み込み
    wp_enqueue_style('main-css', get_template_directory_uri() . '/dist/assets/css/style.css', array(), null);

    // jQueryの再登録
    wp_register_script('jquery', '//code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);
    wp_enqueue_script('jquery');

    // Swiperの読み込み
    wp_enqueue_style(
        'swiper-js','https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(),'11.1.9', null);
    // wp_enqueue_script('swiper-js', '//cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);

    // メインJavaScriptの読み込み
    wp_enqueue_script('main-js', get_template_directory_uri() . '/dist/assets/js/script.js', array('jquery'), '1.0.1', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}