<?php get_header(); ?>
<main>
      <section class="fv">
        <div class="fv__inner">
          <div class="fv__title-wrap">
            <h1 class="fv__title">DIVING</h1>
            <p class="fv__subtitle">into the ocean</p>
          </div>
          <div class="fv__image">
            <div class="swiper js-fv-Swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <picture class="fv__img">
                    <source
                      srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_sp_1.jpg"
                      media="(max-width:767px)"
                    />
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_1.jpg"
                      alt="亀が青い海で泳ぐ"
                    />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture class="fv__img">
                    <source
                      srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_sp_2.jpg"
                      media="(max-width:767px)"
                    />
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_2.jpg"
                      alt="ダイビングしている2人と亀"
                    />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture class="fv__img">
                    <source
                      srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_sp_3.jpg"
                      media="(max-width:767px)"
                    />
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_3.jpg"
                      alt="青い海と空"
                    />
                  </picture>
                </div>
                <div class="swiper-slide">
                  <picture class="fv__img">
                    <source
                      srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_sp_4.jpg"
                      media="(max-width:767px)"
                    />
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/fv_4.jpg"
                      alt="水色の海と白い砂浜"
                    />
                  </picture>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="campaign top-campaign">
        <div class="inner">
          <div class="campaign__title-wrap">
            <div class="campaign__title section-header">
              <p class="section-header__title">Campaign</p>
              <h2 class="section-header__subtitle">キャンペーン</h2>
            </div>
            <div class="campaign-swiper__button">
              <div
                class="campaign-swiper__button--prev swiper-button-prev"
              ></div>
              <div
                class="campaign-swiper__button--next swiper-button-next"
              ></div>
            </div>
          </div>
          <div class="campaign__swiper swiper js-campaign-Swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign1.jpg"
                        alt="カラフルな熱帯魚がたくさん泳いでいる"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          ライセンス取得
                        </div>
                        <h3 class="campaign-card__title">ライセンス取得</h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥56,000</span>
                          </div>
                          <div class="campaign-card__price">¥46,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign2.jpg"
                        alt="青い海と島がありボートが砂浜に定着している"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          体験ダイビング
                        </div>
                        <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥24,000</span>
                          </div>
                          <div class="campaign-card__price">¥18,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign3.jpg"
                        alt="たくさんのクラゲが泳いでいる"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          体験ダイビング
                        </div>
                        <h3 class="campaign-card__title">ナイトダイビング</h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥10,000</span>
                          </div>
                          <div class="campaign-card__price">¥8,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign4.jpg"
                        alt="水面にダイバーが4人いる"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          ファンダイビング
                        </div>
                        <h3 class="campaign-card__title">
                          貸切ファンダイビング
                        </h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥20,000</span>
                          </div>
                          <div class="campaign-card__price">¥16,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <!-- プラス４記事 -->
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign1.jpg"
                        alt="カラフルな熱帯魚がたくさん泳いでいる"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          ライセンス取得
                        </div>
                        <h3 class="campaign-card__title">ライセンス取得</h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥56,000</span>
                          </div>
                          <div class="campaign-card__price">¥46,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign2.jpg"
                        alt="青い海と島がありボートが砂浜に定着している"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          体験ダイビング
                        </div>
                        <h3 class="campaign-card__title">貸切体験ダイビング</h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥24,000</span>
                          </div>
                          <div class="campaign-card__price">¥18,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign3.jpg"
                        alt="たくさんのクラゲが泳いでいる"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          体験ダイビング
                        </div>
                        <h3 class="campaign-card__title">ナイトダイビング</h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥10,000</span>
                          </div>
                          <div class="campaign-card__price">¥8,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="swiper-slide campaign__swiper-slide">
                <div class="campaign-card">
                  <a href="./pages/campaign.html" class="campaign-card__layout">
                    <figure class="campaign-card__img">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/campaign4.jpg"
                        alt="水面にダイバーが4人いる"
                        loading="lazy"
                        decoding="async"
                      />
                    </figure>
                    <div class="campaign-card__body">
                      <div class="campaign-card__title-container">
                        <div class="campaign-card__category">
                          ファンダイビング
                        </div>
                        <h3 class="campaign-card__title">
                          貸切ファンダイビング
                        </h3>
                      </div>
                      <div class="campaign-card__text-wrap">
                        <p class="campaign-card__text">
                          全部コミコミ(お一人様)
                        </p>
                        <div class="campaign-card__price-wrap">
                          <div class="campaign-card__subprice">
                            <span>¥20,000</span>
                          </div>
                          <div class="campaign-card__price">¥16,000</div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="campaign__button">
          <a href="./pages/campaign.html" class="button">Viewmore<span class="arrow"></span></a>
        </div>
      </section>
      <section class="about top-about">
        <div class="inner">
          <div class="about__title section-header">
            <p class="section-header__title">About us</p>
            <h2 class="section-header__subtitle">私たちについて</h2>
          </div>
          <div class="about__photo-container">
            <div class="about__photo-wrap">
              <img
                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/about_2.jpg"
                alt="黄色の２匹の魚が泳いでいる"
                class="about__photo2"
              />
              <img
                src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/about_1.jpg"
                alt="青い空と赤い屋根の上にシーサーが置いてある"
                class="about__photo1"
              />
            </div>
            <div class="about__text-contents">
              <div class="about__text-title">
                Dive into<br />
                the Ocean
              </div>
              <div class="about__text-wrap">
                <p class="about__text">
                  ここにテキストが入ります。ここにテキストが入りま<br
                    class="is-pc"
                  />
                  す。ここにテキストが入ります。ここにテキストが入り<br
                    class="is-pc"
                  />
                  ます。<br />
                  ここにテキストが入ります。ここにテキストが入りま<br
                    class="is-pc"
                  />
                  す。ここにテキストが入ります。ここにテキストが入り<br
                    class="is-pc"
                  />
                  ます。ここにテキスト
                </p>
                <div class="about__button">
                  <a href="./pages/about.html" class="button"
                    >Viewmore<span class="arrow"></span
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="information top-information">
        <div class="inner">
          <div class="information__title section-header">
            <p class="section-header__title">Information</p>
            <h2 class="section-header__subtitle">ダイビング情報</h2>
          </div>
          <div class="information__container top-information__container">
            <div class="information__photo-wrap">
              <picture class="information__photo colorbox js-colorbox">
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/information_sp.jpg"
                  media="(max-width:768px)"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/information.jpg"
                  alt="海底の珊瑚と黄色の熱帯魚"
                />
              </picture>
            </div>
            <div class="information__text-wrap">
              <h3 class="information__text-title">ライセンス講習</h3>
              <p class="information__text">
                当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
              </p>
              <div class="information__button">
                <a href="./pages/information.html" class="button"
                  >Viewmore<span class="arrow"></span
                ></a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="blog top-blog">
        <div class="blog__inner inner">
          <div class="blog__title section-header">
            <p class="section-header__title section-header__title--wh">Blog</p>
            <h2 class="section-header__subtitle section-header__subtitle--wh">
              ブログ
            </h2>
          </div>
          <div class="blog__wrap blog-cards">
            <div class="blog-cards__item">
              <a href="./pages/blog.html" class="blog-card">
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
                    <time datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title">ライセンス取得</h3>
                  </div>
                  <p class="blog-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </div>
            <div class="blog-cards__item">
              <a href="./pages/blog.html" class="blog-card">
                <figure class="blog-card__img">
                <img
                 src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_2.jpg"
                alt="ウミガメが海で泳いでいる"
                loading="lazy"
                decoding="async">
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__meta">
                    <time datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title">ウミガメと泳ぐ</h3>
                  </div>
                  <p class="blog-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div></a
              >
            </div>
            <div class="blog-cards__item">
              <a href="./pages/blog.html" class="blog-card">
                <figure class="blog-card__img">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/blog_3.jpg" alt="カクレクマノミ" >
                </figure>
                <div class="blog-card__body">
                  <div class="blog-card__meta">
                    <time datetime="2023-11-17">2023.11/17</time>
                    <h3 class="blog-card__title">カクレクマノミ</h3>
                  </div>
                  <p class="blog-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="blog__button">
          <a href="./pages/blog.html" class="button">Viewmore<span class="arrow"></span></a>
        </div>
      </section>
      <section class="voice top-voice">
        <div class="inner">
          <div class="voice__title section-header">
            <p class="section-header__title">Voice</p>
            <h2 class="section-header__subtitle">お客様の声</h2>
          </div>
          <div class="voice-card__container voice-cards">
            <div class="voice-cards__item">
              <a href="./pages/voice.html" class="voice-card">
                <div class="voice-card__head">
                  <div class="voice-card__title-container">
                    <div class="voice-card__category-wrap">
                      <p class="voice-card__age">20代(女性)</p>
                      <p class="voice-card__category">ライセンス講習</p>
                    </div>
                    <h3 class="voice-card__title">
                      ここにタイトルが入ります。ここにタイトル
                    </h3>
                  </div>
                  <div class="voice-card__img colorbox js-colorbox">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/voice_1.jpg"
                      alt="麦わら帽子を被った笑顔の女性"
                      loading="lazy"
                      decoding="async"
                    />
                  </div>
                </div>
                <div class="voice-card__body">
                  <p class="voice-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                    ここにテキストが入ります。ここにテキストが入ります。
                  </p>
                </div>
              </a>
            </div>
            <div class="voice-cards__item">
              <a href="./pages/voice.html" class="voice-card">
                <div class="voice-card__head">
                  <div class="voice-card__title-container">
                    <div class="voice-card__category-wrap">
                      <div class="voice-card__age">20代(男性)</div>
                      <div
                        class="voice-card__category"
                      >
                        ファンダイビング
                      </div>
                    </div>
                    <h3 class="voice-card__title">
                      ここにタイトルが入ります。ここにタイトル
                    </h3>
                  </div>
                  <div class="voice-card__img colorbox js-colorbox">
                    <img
                      src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/voice_2.jpg"
                      alt="グーサインをしている黒のシャツを着ている男性"
                      loading="lazy"
                      decoding="async"
                    />
                  </div>
                </div>
                <div class="voice-card__body">
                  <p class="voice-card__text">
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                    ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
                    ここにテキストが入ります。ここにテキストが入ります。
                  </p>
                </div>
              </a>
            </div>
          </div>
          <div class="voice__button">
            <a href="./pages/voice.html" class="button">Viewmore<span class="arrow"></span></a>
          </div>
        </div>
      </section>
      <section class="price top-price">
        <div class="inner">
          <div class="price__title section-header">
            <p class="section-header__title">Price</p>
            <h2 class="section-header__subtitle">料金一覧</h2>
          </div>
          <div class="price__container">
            <div class="price__contents price-lists">
              <div class="price__lists-items">
                <div class="price__list-title">ライセンス講習</div>
                <dl class="price__list">
                  <div class="price__list-item">
                    <dt>オープンウォーターダイバーコース</dt>
                    <dd>¥50,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>アドバンスドオープンウォーターコース</dt>
                    <dd>¥60,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>レスキュー＋EFRコース</dt>
                    <dd>¥70,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__lists-items">
                <div class="price__list-title">体験ダイビング</div>
                <dl class="price__list">
                  <div class="price__list-item">
                    <dt>ビーチ体験ダイビング(半日)</dt>
                    <dd>¥7,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>ビーチ体験ダイビング(1日)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>ボート体験ダイビング(半日)</dt>
                    <dd>¥10,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>ボート体験ダイビング(1日)</dt>
                    <dd>¥18,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__lists-items">
                <div class="price__list-title">ファンダイビング</div>
                <dl class="price__list">
                  <div class="price__list-item">
                    <dt>ビーチダイビング(2ダイブ)</dt>
                    <dd>¥14,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>ボートダイビング(2ダイブ)</dt>
                    <dd>¥18,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>スペシャルダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>ナイトダイビング(1ダイブ)</dt>
                    <dd>¥10,000</dd>
                  </div>
                </dl>
              </div>
              <div class="price__lists-items">
                <div class="price__list-title">スペシャルダイビング</div>
                <dl class="price__list">
                  <div class="price__list-item">
                    <dt>貸切ダイビング(2ダイブ)</dt>
                    <dd>¥24,000</dd>
                  </div>
                  <div class="price__list-item">
                    <dt>1日ダイビング(3ダイブ)</dt>
                    <dd>¥32,000</dd>
                  </div>
                </dl>
              </div>
            </div>
            <div class="price__photo colorbox js-colorbox">
              <picture>
                <source
                  srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/price_sp.jpg"
                  media="(max-width:767px)"
                />
                <img
                  src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/price.jpg"
                  alt="大きな珊瑚と小さな赤い熱帯魚がたくさんいる"
                />
              </picture>
            </div>
          </div>
          <div class="price__button">
            <a href="./pages/price.html" class="button">Viewmore<span class="arrow"></span></a>
          </div>
        </div>
      </section>
      <section class="contact top-contact">
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
                  <a href="./pages/contact.html" class="button"
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
    </main>
<?php get_footer(); ?>