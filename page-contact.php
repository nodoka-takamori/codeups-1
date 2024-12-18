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
          <?php echo do_shortcode('[contact-form-7 id="141b223" title="お問い合わせ"]'); ?>
        </div>
      </div>
      <div class="button-top" id="js-button-top">
        <a href="#"
          ><img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/common/up__arrow.svg" alt="ロゴ"
        /></a>
      </div>
<?php get_footer(); ?>