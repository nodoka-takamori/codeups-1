<?php
$home = esc_url(home_url( '/' ) );
$campaign = esc_url(home_url( '/campaign' ) );
$about = esc_url(home_url( '/about' ) );
$information = esc_url(home_url( '/information' ) );
$blog = esc_url(home_url( '/blog' ) );
$voice = esc_url(home_url( '/voice' ) );
$price = esc_url(home_url( '/price' ) );
$faq = esc_url(home_url( '/faq' ) );
$contact = esc_url(home_url( '/contact' ) );
$privacypolicy = esc_url(home_url( '/privacypolicy' ) );
$terms = esc_url(home_url( '/terms' ) );
?>

<footer class="footer <?php echo is_404() ? 'notfound__footer' : 'top-footer'; ?>">
      <div class="inner">
        <nav class="footer__nav">
          <div class="footer__logo-warp">
            <a href=<?php echo $home; ?>
              ><img
                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo.png"
                class="footer__logo"
                alt="ロゴ"
                loading="lazy"
                decoding="async"
            /></a>
            <div class="footer__icon-contents">
              <a href="#"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/facebook_icon.png"
                  alt="フェイスブックのアイコン"
                  loading="lazy"
                  decoding="async"
              /></a>
              <a href="#"
                ><img
                  src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/instagram_icon.png"
                  alt="インスタグラムのアイコン"
                  loading="lazy"
                  decoding="async"
              /></a>
            </div>
          </div>
          <div class="footer__nav-contents nav-menu">
            <ul class="nav-menu__items nav-menu__items--first">
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $campaign; ?>>キャンペーン</a>
              </li>
              <li class="nav-menu__item"><a href=<?php echo $campaign; ?>>ライセンス取得</a></li>
              <li class="nav-menu__item">
                <a href=<?php echo $campaign; ?>>貸切体験ダイビング</a>
              </li>
              <li class="nav-menu__item"><a href=<?php echo $campaign; ?>>ナイトダイビング</a></li>
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $about; ?>>私たちについて</a>
              </li>
            </ul>
            <ul class="nav-menu__items nav-menu__items--second">
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $information; ?>>ダイビング情報</a>
              </li>
              <li class="nav-menu__item"><a href="./pages/information.html#tab1">ライセンス講習</a></li>
              <li class="nav-menu__item"><a href="./pages/information.html#tab3">体験ダイビング</a></li>
              <li class="nav-menu__item"><a href="./pages/information.html#tab2">ファンダイビング</a></li>
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $blog; ?>>ブログ</a>
              </li>
            </ul>
            <ul class="nav-menu__items nav-menu__items--third">
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $voice; ?>>お客様の声</a>
              </li>
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $price; ?>>料金一覧</a>
              </li>
              <li class="nav-menu__item"><a href="./pages/price.html#price1">ライセンス講習</a></li>
              <li class="nav-menu__item"><a href="./pages/price.html#price2">体験ダイビング</a></li>
              <li class="nav-menu__item"><a href="./pages/price.html#price3">ファンダイビング</a></li>
            </ul>
            <ul class="nav-menu__items nav-menu__items--fourth">
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $faq; ?>>よくある質問</a>
              </li>
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $privacypolicy; ?>>プライバシー<br class="is-sp" />ポリシー</a>
              </li>
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $terms; ?>>利用規約</a>
              </li>
              <li class="nav-menu__item nav-menu__item--main">
                <a href=<?php echo $contact; ?>>お問い合わせ</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="footer__copyright">
          <small class="footer__copyright">
            Copyright&copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small
          >
        </div>
      </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>