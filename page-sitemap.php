<?php get_header(); ?>
      <section class="sitemap__mv mv">
        <div class="mv__title-wrap">
          <p class="mv__title">Site MAP</p>
        </div>
        <picture class="mv__photo">
          <source
            srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/sitemap_mv-sp.jpg"
            media="(max-width:768px)"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/sitemap_mv.jpg"
            alt="たくさんの熱帯魚と大きな珊瑚の写真"
          />
        </picture>
      </section>
      <?php get_template_part('breadcrumb'); ?>
      <section class="sitemap">
        <div class="inner">
          <div class="sitemap__nav-contents nav-menu">
              <ul class="sitemap__nav-items sitemap__nav-items--first">
                <li class="sitemap__nav-item  sitemap__nav-item--main">
                  <a href="./campaign.html">キャンペーン</a>
                </li>
                <li class="sitemap__nav-item"><a href="./campaign.html">ライセンス取得</a></li>
                <li class="sitemap__nav-item">
                  <a href="./campaign.html">貸切体験ダイビング</a>
                </li>
                <li class="sitemap__nav-item"><a href="./campaign.html">ナイトダイビング</a></li>
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./about.html">私たちについて</a>
                </li>
              </ul>
              <ul class="sitemap__nav-items sitemap__nav-items--second">
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./information.html">ダイビング情報</a>
                </li>
                <li class="sitemap__nav-item"><a href="./information.html#tab1">ライセンス講習</a></li>
                <li class="sitemap__nav-item"><a href="./information.html#tab2">体験ダイビング</a></li>
                <li class="sitemap__nav-item"><a href="./information.html#tab3">ファンダイビング</a></li>
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./blog.html">ブログ</a>
                </li>
              </ul>
              <ul class="sitemap__nav-items sitemap__nav-items--third">
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./voice.html">お客様の声</a>
                </li>
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./price.html">料金一覧</a>
                </li>
                <li class="sitemap__nav-item"><a href="./price.html#price1">ライセンス講習</a></li>
                <li class="sitemap__nav-item"><a href="./price.html#price2">体験ダイビング</a></li>
                <li class="sitemap__nav-item"><a href="./price.html#price3">ファンダイビング</a></li>
              </ul>
              <ul class="sitemap__nav-items sitemap__nav-items--fourth">
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./faq.html">よくある質問</a>
                </li>
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./privacypolicy.html">プライバシー<br class="is-sp" />ポリシー</a>
                </li>
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./privacypolicy.html">利用規約</a>
                </li>
                <li class="sitemap__nav-item sitemap__nav-item--main">
                  <a href="./contact.html">お問い合わせ</a>
                </li>
              </ul>
            </div>
          </div>
      </section>
      <section class="contact sitemap__contact">
        <div class="inner">
          <div class="contact__container">
            <div class="contact__contents-left">
              <div class="contact__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/logo_blue.svg" alt="ロゴ" />
              </div>
              <div class="contact__address-wrap">
                <div class="contact__address">
                  <p>沖縄県那覇市1-1</p>
                  <p>TEL:0120-000-0000</p>
                  <p>営業時間:8:30-19:00</p>
                  <p>定休日:毎週火曜日</p>
                </div>
                <div class="contact__address-map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57393.969626622005!2d127.6275265342976!3d26.196615752174797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5681e893b714d%3A0xa5360835fe2d83b8!2z54Cs6ZW35bO2IOOCpuODn-OCq-OCuOODhuODqeOCuQ!5e0!3m2!1sja!2sjp!4v1725201731353!5m2!1sja!2sjp"
                    style="border: 0"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                  ></iframe>
                </div>
              </div>
            </div>
            <div class="contact__contents-right">
              <div class="contact__title-wrap">
                <p class="contact__title">Contact</p>
                <h2 class="contact__subtitle">お問い合わせ</h2>
                <p class="contact__title-text">ご予約・お問い合わせはコチラ</p>
                <div class="contact__button">
                  <a href="./contact.html" class="button"
                    >Contact us<span class="arrow"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="button-top" id="js-button-top">
        <a href="#"
          ><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/up__arrow.svg" alt="ロゴ"
        /></a>
      </div>
<?php get_footer(); ?>