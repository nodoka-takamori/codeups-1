<?php get_header(); ?>
      <section class="contact__mv mv">
        <div class="mv__title-wrap">
          <p class="mv__title">Contact</p>
        </div>
        <picture class="mv__photo">
          <source
            srcset="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/contact_mv-sp.jpg"
            media="(max-width:768px)"
          />
          <img
            src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/contact_mv.jpg"
            alt="2匹の黄色の熱帯魚が海で泳いでいる"
          />
        </picture>
      </section>
      <?php get_template_part('breadcrumb'); ?>
      <div class="page-contact layout-contact">
        <div class="page-contact__inner inner">
          <form class="page-contact__form form" action="#" method="POST">
            <!-- お名前 -->
            <div class="form__group">
              <label for="name"
                >お名前 <span class="required">必須</span></label
              >
              <input
                type="text"
                id="name"
                name="name"
                placeholder="沖縄　太郎"
                required
              />
            </div>
            <!-- メールアドレス -->
            <div class="form__group">
              <label for="email"
                >メールアドレス <span class="required">必須</span></label
              >
              <input
                type="email"
                id="email"
                name="email"
                placeholder="aaa000@gmail.com"
                required
              />
            </div>
            <!-- 電話番号 -->
            <div class="form__group">
              <label for="phone"
                >電話番号 <span class="required">必須</span></label
              >
              <input
                type="tel"
                id="phone"
                name="phone"
                placeholder="000-0000-0000"
                required
              />
            </div>
            <!-- お問合せ項目 -->
            <div class="form__group form__group--check">
              <label>お問合せ項目 <span class="required">必須</span></label>
              <div class="checkbox-group">
                <label
                  ><input
                    type="checkbox"
                    name="inquiry[]"
                    value="ダイビング講習について"
                  />
                  ダイビング講習について</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="inquiry[]"
                    value="ファンダイビングについて"
                  />
                  ファンダイビングについて</label
                >
                <label
                  ><input
                    type="checkbox"
                    name="inquiry[]"
                    value="体験ダイビングについて"
                  />
                  体験ダイビングについて</label
                >
              </div>
            </div>
            <!-- キャンペーン -->
            <div class="form__group form__group--cam">
              <label for="campaign"  class="form__group-title"
                >キャンペーン</label
              >
              <div class="form__select">
              <select id="campaign" name="campaign" >
                <option value="">キャンペーン内容を選択</option>
                <option value="キャンペーン1">キャンペーン1</option>
                <option value="キャンペーン2">キャンペーン2</option>
              </select></div>
            </div>
            <!-- お問合せ内容 -->
            <div class="form__group">
              <label for="message"
                >お問合せ内容 <span class="required">必須</span></label
              >
              <textarea
                id="message"
                name="message"
                rows="6"
                required
              ></textarea>
            </div>
            <!-- 個人情報同意 -->
            <div class="form__group--pr layout-form__group--pr">
              <label
                ><input
                  type="checkbox"
                  name="agree"
                  required
                  class="form__group-box--pr"
                />
                個人情報の取り扱いについて同意のうえ送信します。</label
              >
            </div>
            <!-- 送信ボタン -->
            <div class="form__button">
              <a href="./thanks.html" class="button button--send"
                >Send<span class="arrow"></span
              ></a>
            </div>
          </form>
        </div>
      </div>
      <div class="button-top" id="js-button-top">
        <a href="#"
          ><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/up__arrow.svg" alt="ロゴ"
        /></a>
      </div>
<?php get_footer(); ?>