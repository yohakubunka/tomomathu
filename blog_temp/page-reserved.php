<?php
define("description", "ともまつ眼科クリニックでは、患者様をお待たせする時間をできるだけ短くする取り組みを行っています。是非ご利用下さい。");
define("title", "WEBからの予約｜ともまつ眼科クリニック");
?>
<span id="hidden_nav_bg">
  <? get_header(); ?>
</span>
<style>
  section.f_slider {
    display: none;
  }
</style>
<main id="reserved" class="no-index-page">
  <section id="reserved_main_visual" class="no-index-page-sec">
    <div class="news_list_logo">
      <h1 class="pc2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
      </h1>
    </div>
    <div class="visual_text">
      <h2>RESERVED<br><span>WEBからの予約</span></h2>
    </div>
  </section>

  <section id="recruit_main_content">
    <div class="container">

      <div class="row reserved-text1">
        <div class="col-md-8 mx-auto text-left">
          <p>ともまつ眼科クリニックでは、<br>
            患者様をお待たせする時間をできるだけ短くする取り組みを行っています。<br>
            当院専用予約ページで、受診したい日付で◯の付いている時間を選択して、ご予約ください。
            <br><br>☆ご予約の際は受診される方の生年月日をご記入ください。
          </p>
        </div>
      </div>

      <div class="row">
        <div class="mx-auto recruit-phone">
          <p class="text-center banner"><a href="http://0643-tomomatsu.aa0.netvolante.jp/" target="_blank">WEB受付はこちらへ</a></p>
          <p class="phone-p1 text-center">WEB受付：24時間受付中！</p>
        </div>
      </div>

      <div class="row reserved-text1">
        <div class="col-md-8 mx-auto text-left">
          <p>
            視野検査・散瞳検査・小児予約・眼鏡コンタクト処方のご予約はお電話にてお願いいたします。
          </p>
        </div>
      </div>

      <div class="row">
        <div class="mx-auto recruit-phone">
          <a class="text-center">
            <p>0587-58-5558</p>
          </a>
          <p class="phone-p1">
            受付時間:(平日) 09：00〜14：30<br>
            　　　　 (土曜) 09:00~11:00 （完全予約制）	
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>