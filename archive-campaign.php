<?php get_header(); ?>
      <section class="campaign__mv mv">
        <div class="mv__title-wrap">
          <p class="mv__title">Campaign</p>
        </div>
        <picture class="mv__photo">
          <source
            srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign_mv-sp.jpg"
            media="(max-width:768px)"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign_mv.jpg"
            alt="2匹の黄色の熱帯魚が海で泳いでいる"
          />
        </picture>
      </section>
      <?php get_template_part('breadcrumb'); ?>
      <section class="page-campaign layout-campaign">
        <div class="page-campaign__inner inner">
          <!-- タグ -->
          <div class="page-campaign_tags tags">
            <a href="#" class="tags__item active">ALL</a>
            <a href="#" class="tags__item">ライセンス講習</a>
            <a href="#" class="tags__item">ファンダイビング</a>
            <a href="#" class="tags__item">体験ダイビング</a>
          </div>
          <!-- カード -->
          <div class="page-campaign__cards campaign-cards">
    <div class="campaign-cards__inner">
        <?php if(have_posts()): ?>
            <?php while(have_posts()): the_post(); ?>
                <div class="campaign-card campaign-card--big">
                    <div class="campaign-card__img">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('full'); ?>
                        <?php else: ?>
                            <img
                                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/noimage.jpg"
                                alt="noimage"
                                loading="lazy"
                                decoding="async"
                            />
                        <?php endif; ?>
                    </div>
                    <div class="campaign-card__body campaign-card__body--big">
                        <div class="campaign-card__title-container">
                            <?php
                            $categories = get_the_category();
                            if ( ! empty( $categories ) ) {
                                foreach( $categories as $category ) {
                                    echo '<div class="campaign-card__category">' . esc_html( $category->name ) . '</div>';
                                }
                            }
                            ?>
                            <h3 class="campaign-card__title campaign-card__title--big">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <div class="campaign-card__text-wrap campaign-card__text-wrap--big">
                            <p class="campaign-card__text">全部コミコミ(お一人様)</p>
                            <div class="campaign-card__price-wrap campaign-card__price-wrap--big">
                                <div class="campaign-card__subprice campaign-card__subprice--big">
                                    <span>¥56,000</span>
                                </div>
                                <div class="campaign-card__price">
                                    <?php
                                    // ACFで設定したカスタムフィールド「campaign_price」の値を取得して表示
                                    $price = get_field('campaign_price');
                                    echo '¥' . number_format($price);
                                    ?>
                                </div>
                            </div>
                            <div class="campaign-card__text-wrapper campaign-card__text-wrapper--big">
                                <div class="campaign-card__text-info">
                                    <p>
                                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                                    </p>
                                </div>
                                <p class="campaign-card__day">2023/6/1-9/30</p>
                                <p class="campaign-card__contact-info">
                                    ご予約・お問い合わせはコチラ
                                </p>
                            </div>
                            <div class="campaign-card__button">
                                <a href="./contact.html" class="button">
                                    Contact us<span class="arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

          <div class="pagination page-blog__pagination">
              <div class="pagination__wrap">
              <?php wp_pagenavi(); ?>
              </div>
            </div>
        </div>
      </section>
      <section class="contact page-campaign__contact">
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

