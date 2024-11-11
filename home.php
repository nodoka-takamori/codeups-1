<?php get_header(); ?>
      <section class="blog__mv mv">
        <div class="mv__title-wrap">
          <p class="mv__title">Blog</p>
        </div>
        <picture class="mv__photo">
          <source
            srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_mv-sp.jpg"
            media="(max-width:768px)"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_mv.jpg"
            alt="2匹の黄色の熱帯魚が海で泳いでいる"
          />
        </picture>
      </section>
      <?php get_template_part('breadcrumb'); ?>
      <div class="page-blog layout-blog">
        <div class="page-blog__inner inner">
          <!-- メイン -->
          <section class="page-blog__main">
            <div class="blog-cards blog-cards--sub">
              <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                <div class="blog-cards__item">
                <a href="<?php the_permalink(); ?>" class="blog-card">
                  <figure class="blog-card__img">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_1.jpg"
                      alt="珊瑚にたくさんのぷつぷつがついている"
                      loading="lazy"
                      decoding="async"
                    />
                  </figure>
                  <div class="blog-card__body">
                    <div class="blog-card__meta">
                    <time datetime="<?php the_time('c'); ?>"><?php the_time('Y.m/d'); ?></time>
                      <h3 class="blog-card__title"><?php the_title(); ?></h3>
                    </div>
                    <p class="blog-card__text">
                      ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                  </div>
                </a>
              </div>
              <?php endwhile; endif; ?>
            </div>
            <div class="pagination page-blog__pagination">
              <div class="pagination__wrap">
              <?php wp_pagenavi(); ?>
              </div>
            </div>
<!--
            <div class="wp-pagenavi">
  <span class="pages">2 / 4</span>
  <a class="previouspostslink" rel="prev" href="/example.com/blogs/">«</a>
  <a class="page smaller" title="Page 1" href="/example.com/blogs/">1</a>
  <span class="current">2</span>
  <a class="page larger" title="Page 3" href="/example.com/blogs/page/3/">3</a>
  <a class="page larger" title="Page 4" href="/example.com/blogs/page/4/">4</a>
  <a class="nextpostslink" rel="next" href="/example.com/blogs/page/3/">»</a>
</div> -->
            <!-- <div class="pagination page-blog__pagination">
              <div class="pagination__wrap">
                <a href="#" class="pagination__button pagination__button--prev"
                  >&lt;</a
                >
                <a href="#" class="pagination__button">1</a>
                <a href="#" class="pagination__button active">2</a>
                <a href="#" class="pagination__button">3</a>
                <a href="#" class="pagination__button">4</a>
                <a href="#" class="pagination__button pagination__button--pc"
                  >5</a
                >
                <a href="#" class="pagination__button pagination__button--pc"
                  >6</a
                >
                <a href="#" class="pagination__button pagination__button--next"
                  >&gt;</a
                >
              </div>
            </div> -->
          </section>
          <!-- アサイド -->
          <div class="page-blog__aside aside">
            <div class="aside__article">
              <div class="aside__title-line">
                <h2 class="aside__title">人気記事</h2>
              </div>
              <div class="aside__container aside__article-container">
                <div class="aside__article-contents">
                  <a href="#" class="aside__article-block">
                    <div class="aside__article-photo">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_4.jpg"
                        alt="黄色い一匹の熱帯魚"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                    <div class="aside__article-meta">
                      <div class="aside__article-days">2023.11/17</div>
                      <div class="aside__article-title">ライセンス取得</div>
                    </div>
                  </a>
                </div>
                <div class="aside__article-contents">
                  <a href="#" class="aside__article-block">
                    <div class="aside__article-photo">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_2.jpg"
                        alt="海でウミガメが泳いでいる"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                    <div class="aside__article-meta">
                      <div class="aside__article-days">2023.11/17</div>
                      <div class="aside__article-title">ウミガメと泳ぐ</div>
                    </div>
                  </a>
                </div>
                <div class="aside__article-contents">
                  <a href="#" class="aside__article-block">
                    <div class="aside__article-photo">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_3.jpg"
                        alt="カクレクマノミの写真"
                        loading="lazy"
                        decoding="async"
                      />
                    </div>
                    <div class="aside__article-meta">
                      <div class="aside__article-days">2023.11/17</div>
                      <div class="aside__article-title">カクレクマノミ</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="aside__voice">
              <div class="aside__title-line">
                <h2 class="aside__title">口コミ</h2>
              </div>
              <div class="aside__container aside__voice-container">
                <div class="aside__voice-contents">
                  <div class="aside__voice-block">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/aside_voice.jpg"
                      alt="30代のカップルの写真"
                      loading="lazy"
                      decoding="async"
                      class="aside__voice-photo"
                    />
                    <div class="aside__vice-meta">
                      <p class="aside__voice-age">30代(カップル)</p>
                      <p class="aside__voice-title">
                        ここにタイトルが入ります。ここにタイトル
                      </p>
                    </div>
                  </div>
                  <div class="aside__voice-button">
                    <a href="#" class="button"
                      >Viewmore<span class="arrow"></span
                    ></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="aside__campaign">
              <div class="aside__title-line">
                <h2 class="aside__title">キャンペーン</h2>
              </div>
              <div class="aside__container aside__campaign-container">
                <div class="aside__campaign-contents">
                  <div
                    class="aside-campaign__card campaign-card campaign-card--aside"
                  >
                    <a href="#">
                      <figure class="campaign-card__img--aside">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign1.jpg"
                          alt="カラフルな熱帯魚がたくさん泳いでいる"
                          loading="lazy"
                          decoding="async"
                        />
                      </figure>
                      <div
                        class="campaign-card__body campaign-card__body--aside"
                      >
                        <div class="campaign-card__title-container">
                          <h3
                            class="campaign-card__title campaign-card__title--aside"
                          >
                            ライセンス取得
                          </h3>
                        </div>
                        <div
                          class="campaign-card__text-wrap campaign-card__text-wrap--aside"
                        >
                          <p
                            class="campaign-card__text campaign-card__text--aside"
                          >
                            全部コミコミ(お一人様)
                          </p>
                          <div
                            class="campaign-card__price-wrap campaign-card__price-wrap--aside"
                          >
                            <div class="campaign-card__subprice">
                              <span>¥56,000</span>
                            </div>
                            <div
                              class="campaign-card__price campaign-card__price--aside"
                            >
                              ¥46,000
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div
                    class="aside-campaign__card campaign-card campaign-card--aside"
                  >
                    <a href="#">
                      <figure class="campaign-card__img--aside">
                        <img
                          src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign2.jpg"
                          alt="青い海の上に船が２隻浮かんでいる"
                          loading="lazy"
                          decoding="async"
                        />
                      </figure>
                      <div
                        class="campaign-card__body campaign-card__body--aside"
                      >
                        <div class="campaign-card__title-container">
                          <h3
                            class="campaign-card__title campaign-card__title--aside"
                          >
                            貸切体験ダイビング
                          </h3>
                        </div>
                        <div
                          class="campaign-card__text-wrap campaign-card__text-wrap--aside"
                        >
                          <p
                            class="campaign-card__text campaign-card__text--aside"
                          >
                            全部コミコミ(お一人様)
                          </p>
                          <div
                            class="campaign-card__price-wrap campaign-card__price-wrap--aside"
                          >
                            <div class="campaign-card__subprice">
                              <span>¥24,000</span>
                            </div>
                            <div
                              class="campaign-card__price campaign-card__price--aside"
                            >
                              ¥18,000
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="aside__campaign-button">
                <a href="./campaign.html" class="button"
                  >Viewmore<span class="arrow"></span
                ></a>
              </div>
            </div>
            <div class="aside__archive">
              <div class="aside__contents aside__article">
                <div class="aside__title-line">
                  <h2 class="aside__title">アーカイブ</h2>
                </div>
                <div class="aside__container aside__archive-container">
                  <ul class="aside__archive-list">
                    <li class="aside__archive-item js-archive__toggle">
                      <a href="#">2023</a>
                    </li>
                    <li class="aside__archive-item aside__archive-item--month">
                      <a href="#">3月</a>
                    </li>
                    <li class="aside__archive-item aside__archive-item--month">
                      <a href="#">2月</a>
                    </li>
                    <li class="aside__archive-item aside__archive-item--month">
                      <a href="#">1月</a>
                    </li>
                    <li class="aside__archive-item js-archive__toggle">
                      <a href="#">2022</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="contact page-blog__contact">
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