<?php
define("description", "ともまつ眼科クリニックでの採用情報はこちらをご覧ください。");
define("title", "採用について｜ともまつ眼科クリニック");
?>
<span id="hidden_nav_bg">
  <? get_header(); ?>
</span>
<style>
  section.f_slider {
    display: none;
  }
</style>
<main id="recruit" class="no-index-page">
  <section id="recruit_main_visual" class="no-index-page-sec">
    <div class="news_list_logo">
      <h1 class="pc2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
      </h1>
    </div>
    <div class="visual_text">
      <h2>RECRUIT<br><span>採用について</span></h2>
    </div>
  </section>

  <section id="recruit_main_content">
    <div class="container up">
      <div class="row hed-text">
        <div class="col-10 col-md-6 text-center mx-auto">
          <h3 class="d-block">安心して働ける環境を整えています。</h3>
          <p class="text-left">患者様に対する細やかな心配りを大切にする明るいスタッフが集まっています。<br>事前に病院の雰囲気を知りたい方は病院見学も行っておりますのでお気軽にお問合せください。</p>
        </div>
      </div>

      <div class="row BoxPutLetter">
        <div class="box mx-auto top">
          <h3><span>募集要項</span></h3>
          <div class="inner">
            <table class="pc">
              <tr>
                <td>【 職 種 】</td>
                <td>視能訓練士／看護師・准看護師／医療事務</td>
              </tr>
              <tr>
                <td>【勤務時間】</td>
                <td>AM8:30~PM16:30</td>
              </tr>
              <tr>
                <td>【 給 料 】</td>
                <td>経験・能力を考慮して面接時に決定いたします。</td>
              </tr>
            </table>
            <div class="sp">
              <p>【 職 種 】<br>視能訓練士／看護師・准看護師／医療事務</p>
              <p>【勤務時間】<br>AM8:30~PM16:30</p>
              <p>【 給 料 】<br>経験・能力を考慮して面接時に決定いたします。</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row top">
        <div class="mx-auto recruit-phone">
          <a class="text-center" href="tel:0587-58-5558">
            <p>0587-58-5558</p>
          </a>
          <p class="phone-p1 text-center">平日受付時間：09：00〜14：30</p>
          <p class="phone-p1 text-center">土曜受付時間：09:00~11:00 </p>
          <p class="phone-p2 text-center">休日 : 土曜午後、日曜・祝日</p>
          <span class="mx-auto">採用に関するお問合せは、電話にて受付致します</span>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>