<?php
define("description", "ともまつ眼科クリニックでの問診票はこちらをご覧ください。");
define("title", "問診票｜ともまつ眼科クリニック");
?>
<span id="hidden_nav_bg">
  <? get_header(); ?>
</span>
<style>
  section.f_slider {
    display: none;
  }
</style>
<main id="medicalcheck" class="no-index-page">
  <section id="medicalcheck_mainvisual" class="no-index-page-sec">
    <!-- <div class="news_list_logo">
      <h1 class="pc2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
      </h1>
    </div> -->
    <div class="visual_text">
      <h2>MEDICAL QUESTIONNAIRE<br><span>問診表</span></h2>
    </div>
  </section>

  <section id="medical_from">
    <div class="container up">
      <div class="medicalcheck">
        <div class="medicalcheck__text">
          <p class="medical-con-p2">問診表をご記入ください</p>
          <p class="anot">※こちらのフォームからは診察予約は受付しておりません。<br>お電話よりご予約をお願いいたします。<br><a class="telnum" href="tel:0587-58-5558">電話番号:0587-58-5558</a>
          </p>
        </div>
        <div class="medicalcheck__from">
          <?php echo do_shortcode('[contact-form-7 id="138" title="問診票"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>