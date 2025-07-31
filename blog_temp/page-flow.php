<?php
define("description", "診察の流れについて説明しています。初めての方は是非ご確認下さい。");
define("title", "診察の流れ｜ともまつ眼科クリニック");
?>
<span id="hidden_nav_bg">
  <? get_header(); ?>
</span>
<style>
  section.f_slider {
    display: none;
  }
</style>
<main id="flow" class="no-index-page">
  <section id="flow_main_visual" class="no-index-page-sec">
    <div class="news_list_logo">
      <h1 class="pc2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
      </h1>
    </div>
    <div class="visual_text">
      <h2>FLOW<br><span>診察の流れ</span></h2>
    </div>
  </section>

  <section class="flow-main-content">
    <div class="container">
      <div class="row card-box card-box1">
        <div class="col-md-7 left-content left">
          <div class="flow-number">STEP.1</div>
          <h3>予約</h3>
          <p class="flow-con-p1 mb-2">初めて受診される方の御予約はお電話から受け付けております。</p>
          <a class="flow-con-a1">
            <p>TEL 0587-58-5558</p>
          </a>
          <table class="flow-con-p2 hidden425">
            <tr>
              <td valign="top" width="99px">電話受付時間</td>
              <td valign="top" width="66px">（平日）</td>
              <td valign="top">9:00〜14:30</td>
            </tr>
            <tr>
              <td valign="top"></td>
              <td valign="top">（土曜）</td>
              <td valign="top">09:00~11:00（完全予約制）	</td>
            </tr>
          </table>
          <p class="hidden-off-425">
            電話受付時間<br>
            （平日）9:00~14:30<br>
            （土曜）9:00~12:30
          </p>
        </div>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img02.png" />
      </div>

      <div class="row mt-5 sp">
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img02.png" />
        </div>
      </div>

      <div class="row card-box card-box2">
        <div class="col-md-7 left-content left">
          <div class="flow-number">STEP.2</div>
          <h3>受付</h3>
          <p class="flow-con-p1 flow-con-p1_2">受付時間内にクリニックにお越しください。初診の方はカルテ作成や検査内容によっては、所要時間が1時間～2時間かかる場合があります。<br>お時間に余裕をもってお越しください。</p>
          <h4>持ち物</h4>
          <p class="flow-con-p3">
            ・健康保険証　・（お持ちの方は）各種医療証<br>
            ・お薬手帳　・紹介状　など<br>
            ※ その他、医師に伝えたい症状などがあればメモなどにまとめておいていただくと、スムーズです。
          </p>
        </div>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img03.png" />
      </div>

      <div class="row mt-5 sp">
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img03.png" />
        </div>
      </div>

      <div class="row card-box card-box3">
        <div class="col-md-7 left-content left">
          <div class="flow-number">STEP.3</div>
          <h3>問診・検査</h3>
          <p class="flow-con-p4">記入していただいた問診票をもとに、スタッフが現在の症状や気になっていることをお伺いします。<br>視力検査・眼圧測定・屈折検査などの基本検査を行います。</p>
        </div>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img04.png" />
      </div>

      <div class="row mt-5 sp">
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img04.png" />
        </div>
      </div>

      <div class="row card-box card-box4">
        <div class="col-md-7 left-content left">
          <div class="flow-number">STEP.4</div>
          <h3>診察</h3>
          <p class="flow-con-p4">診察室で、検査結果をもとに医師が診察し、目の状態についてご説明します。わかりにくい時や不安なことがありましたら、何でもご相談ください。</p>
        </div>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img05.png" />
      </div>

      <div class="row mt-5 sp">
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img05.png" />
        </div>
      </div>

      <div class="row card-box card-box5">
        <div class="col-md-7 left-content left">
          <div class="flow-number">STEP.5</div>
          <h3>会計・処方せんのお渡し</h3>
          <p class="flow-con-p4">受付したところと同じ場所で会計いたします。<br>当院は院外処方です。お薬が出た方は、処方せんをお渡ししますので、お近くの薬局か、かかりつけの薬局に発行後４日以内にお持ちください。</p>
        </div>
        <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img06.png" />
      </div>

      <div class="row mt-5 sp">
        <div class="col-12">
          <img src="<?php echo get_template_directory_uri(); ?>/images/flow/flow-img06.png" />
        </div>
      </div>

    </div>
  </section>


</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>