<?php get_header(); ?>
<main>
      <section class="terms__mv mv">
        <div class="mv__title-wrap">
          <p class="mv__title">Terms of Service</p>
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
      <section class="terms">
        <div class="terms__inner inner">
          <h2 class="terms__title">利用規約</h2>
          <div class="terms__text-container">
            <p class="terms__text">
              以下は、Webサイトで使用する一般的な利用規約の例です。
            </p>
            <div class="terms__text-wrap numberList">
              <p class="terms__text numberList__item">
                概要
                この利用規約は、当社が提供するサービスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。
              </p>
              <p class="terms__text numberList__item">
                サービスの利用
                当社のサービスは、お客様が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。
              </p>
              <p class="terms__text numberList__item">
                禁止事項 お客様は、以下の行為を禁止します。
              </p>
              <p class="terms__text">
                ・当社のサービスに対して不正なアクセスをすること
                ・当社のサービスにおいて、他のユーザーに対して迷惑をかける行為をすること
                ・当社のサービスを商業目的で利用すること
                ・当社のサービスに関する知的財産権を侵害する行為をすること
                ・その他、法律や公序良俗に反する行為をすること
              </p>
            </div>
            <div class="terms__text-wrap numberList">
              <p class="terms__text numberList__item">
                知的財産権
                当社のサービスに関する知的財産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。
              </p>
              <p class="terms__text numberList__item">
                免責事項
                当社は、当社のサービスに関連して発生した損害について、一切の責任を負わないものとします。また、当社は、当社のサービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません。
              </p>
              <p class="terms__text numberList__item">
                プライバシー
                当社は、お客様の個人情報を適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。
              </p>
              <p class="terms__text numberList__item">
                その他の規定
                本規約は、日本法に準拠して解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。
              </p>
              <p class="terms__text numberList__item">
                利用規約の変更
                当社は、必要に応じて本利用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
              </p>
              <div class="terms__text--last">
                <p class="terms__text">
                  以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contact terms-contact">
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
    </main>
<?php get_footer(); ?>