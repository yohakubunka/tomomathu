<script>
  (function(d) {
    var config = {
        kitId: 'thm8aor',
        scriptTimeout: 3000,
        async: true
      },
      h = d.documentElement,
      t = setTimeout(function() {
        h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
      }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
    h.className += " wf-loading";
    tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
    tk.async = true;
    tk.onload = tk.onreadystatechange = function() {
      a = this.readyState;
      if (f || a && a != "complete" && a != "loaded") return;
      f = true;
      clearTimeout(t);
      try {
        Typekit.load(config)
      } catch (e) {}
    };
    s.parentNode.insertBefore(tk, s)
  })(document);
</script>

<?php
define("description", "岩倉市の眼科「ともまつ眼科クリニック」公式サイト。「選定療養認定施設」である当院では多焦点レンズを使った白内障手術を受けることができます。院長は、白内障手術至っては3,000件以上の手術を行っております。");
define("title", "ともまつ眼科クリニック｜岩倉市の眼科・白内障手術の日帰り手術");
?>
<?php get_header(); ?>
<?php $td = get_template_directory_uri();
$hm = get_home_url(); ?>
<!-- index -->
<div class="index" role="main">
  <!-- mv -->
  <section class="mv">
    <div class="slick-main slick">
      <div class="slideobject">
        <figure class="image" style="background-image: url(<?php echo $td; ?>/images/index/mv1.jpg);width: 100%;"></figure>
        <div class="tl tl_equipment">
          <div class="h_logo tab2"><img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック"></div>
          <span>
            複数名の視能訓練士在勤<br>最新の白内障手術機器を使用しています。<br><span class="percent">(愛知県内の眼科施設導入率約3%)</span>
          </span>
        </div>
      </div>
      <div class="slideobject">
        <figure class="image" style="background-image: url(<?php echo $td; ?>/images/index/mv2.jpg);width: 100%;"></figure>
        <div class="tl tl_hakunai">
          <div class="h_logo tab2"><img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック"></div>
          <span>
            当院で白内障手術を受ける患者様の<br>約25～30%が多焦点眼内レンズによるメガネ<br class="tb">のない快適な生活を選ばれています。<br><span class="percent">(全国の多焦点眼内レンズ選択率約3～4%)</span>
          </span>
        </div>
      </div>
      <div class="slideobject">
        <figure class="image" style="background-image: url(<?php echo $td; ?>/images/index/mv3.jpg);width: 100%;"></figure>
        <div class="tl">
          <div class="h_logo tab2"><img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック"></div>
          <span>
            プレミアム（多焦点）眼内レンズを使った<br>白内障手術を受けることができます。
          </span>
        </div>
      </div>
      <div class="slideobject">
        <figure class="image" style="background-image: url(<?php echo $td; ?>/images/index/mv4.jpg);width: 100%;"></figure>
        <div class="tl tl_un">
          <div class="h_logo tab2"><img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック"></div>
          <span>
            白内障手術より高度な技術を要する<br>角膜移植手術や硝子体手術を行っています。
          </span>
        </div>
      </div>
      <div class="slideobject">
        <figure class="image" style="background-image: url(<?php echo $td; ?>/images/index/mv5.png);width: 100%;"></figure>
        <div class="tl tl_un">
          <div class="h_logo tab2"><img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック"></div>
          <span>
            他院からのセカンドオピニオンや<br>緊急手術に対応しています。
          </span>
        </div>
      </div>
    </div>
    <h1 class="pc2">
      <img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
    </h1>
  </section>
  <!-- /mv -->

  <section class="media cont" id="media">
    <div class="marquee-wrap">
      <p class="top_title"><span class="eng_title">NEWS</span><span class="jp_title">お知らせ</span></p>
      <div class="news-wrap">
        <?php
        $args = array(
          'post_type'      => 'post',
          'posts_per_page' => 4,
          'no_found_rows'  => true, // ページネーション不要ならtrueで高速化
        );
        $the_query = new WP_Query($args);
        ?>
        <div class="news-info">
          <p class="info-title">診察に関するお願い</p>
          <ul class="info-content">
            <li>土曜日の診察は完全予約制となっております。</li>
            <li>初診の方はお電話にてご予約をお願いいたします。</li>
            <li>
              予約外でご来院された場合（平日）<br>
              <span class="caution">予約の方が優先になるためお待ちいただくお時間のご案内ができかねますのでご了承下さい。</span>
            </li>
            <li>コンタクトレンズのお取り扱いはしておりません（令和3年3月より）</li>
          </ul>
        </div>
        <div class="news-items">
          <ul class="news-content">
            <?php if ($the_query->have_posts()) : ?>
              <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="">
                  <p class="news-date"><?php echo get_the_date('Y.m.d'); ?></p>
                  <p class="news-title"><?php the_title(); ?></p>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <a class="other " href="<?php echo $hm; ?>/news">
            <p>VIEW MORE</p>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- /media -->

  <section class="caratact_seciton">
    <div class="caratact_wrap">
      <p class="top_title under"><span class="eng_title">CATARACT</span><span class="jp_title">白内障手術への取り組み</span></p>
    </div>
    <div>
      <?php
      $cataracts = SCF::get('cataracts');
      if (!empty($cataracts)) :
      ?>
        <ul class="caratact-card-list">
          <?php foreach ($cataracts as $item) : ?>
            <li class="card-item">
              <?php
              $image_id = $item['cataract_image'];
              $image_url = wp_get_attachment_image_url($image_id, 'full');
              if ($image_url) :
              ?>
                <img src="<?php echo esc_url($image_url); ?>" alt="">
              <?php endif; ?>

              <?php if (!empty($item['cataract_text'])) : ?>
                <p class="card_text"><?php echo esc_html($item['cataract_text']); ?></p>
              <?php endif; ?>

              <?php if (!empty($item['cataract_link'])) : ?>
                <a class="card_link" href="<?php echo esc_url($item['cataract_link']); ?>">VIEW MORE →</a>
              <?php endif; ?>
            </li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>
    </div>
    <div class="caratact_wrap">
      <div class="caratact_arrow"></div>
      <div class="custom_dots"></div>
    </div>


  </section>

  <section class="myopia_section">
    <div class="myopia_wrap">
      <p class="top_title under"><span class="eng_title">MYOPIA</span><span class="jp_title">近視治療</span></p>
      <div>
        <?php
        $myopias = SCF::get('myopias');
        if (!empty($myopias)) :
        ?>
          <ul class="card-list">
            <?php foreach ($myopias as $item) : ?>
              <li class="card-item">
                <?php
                $image_id = $item['myopia_image'];
                $image_url = wp_get_attachment_image_url($image_id, 'full');
                if ($image_url) :
                ?>
                  <img src="<?php echo esc_url($image_url); ?>" alt="">
                <?php endif; ?>

                <?php if (!empty($item['myopia_text'])) : ?>
                  <p class="card_text"><?php echo esc_html($item['myopia_text']); ?></p>
                <?php endif; ?>

                <?php if (!empty($item['myopia_link'])) : ?>
                  <a class="card_link" href="<?php echo esc_url($item['myopia_link']); ?>">VIEW MORE →</a>
                <?php endif; ?>
              </li>
            <?php endforeach; ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <!-- mission -->
  <section class="mission cont">
    <h2 class="com_h2 top">
      <p>OUR MISSION</p>
      <span>私たちのミッション</span>
    </h2>
    <p class="txt top">
      我々は、大学病院で培った高度な手術技術で地域医療に貢献し続けます。
    </p>
    <ul class="top">
      <li>
        <a href="<?php echo $hm; ?>/facility/#content1">
          <div class="txt_box">
            <h2 class="com_h2">
              <p>FOR AROUND</p>
              <span>近隣の眼科医院の皆様へ</span>
            </h2>
            <div class="arrow"><i class="fas fa-chevron-down"></i></div>
            <div class="view">VIEW MORE</div>
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo $hm; ?>/facility/#content3">
          <div class="txt_box">
            <h2 class="com_h2">
              <p>DOCTORS</p>
              <span>医師紹介</span>
            </h2>
            <div class="arrow"><i class="fas fa-chevron-down"></i></div>
            <div class="view">VIEW MORE</div>
          </div>
        </a>
      </li>
      <li>
        <a href="<?php echo $hm; ?>/facility/#content4">
          <div class="txt_box">
            <h2 class="com_h2">
              <p>FACILITY</p>
              <span>院内と設備</span>
            </h2>
            <div class="arrow"><i class="fas fa-chevron-down"></i></div>
            <div class="view">VIEW MORE</div>
          </div>
        </a>
      </li>
    </ul>
  </section>
  <!-- /mission -->
  <!-- medical -->
  <section class="medical cont">
    <h2 class="com_h2">
      <p>MEDICAL</p>
      <span>診療について</span>
    </h2>
  </section>
  <!-- /medical -->
  <!-- CONTENT -->
  <section class="content cont">
    <div class="cont_in left">
      <div class="box">
        <h2 class="com_h2 top">
          <p>MEDICAL CONTENT</p>
          <span>眼科一般治療</span>
        </h2>
        <p class="txt">
          ・白内障・緑内障・加齢性黄斑変性症<br>・黄斑前膜・黄斑円孔・まぶたの病気
        </p>
        <p class="txt2">
          斜視、弱視、白内障、緑内障、加齢黄斑変性、糖尿病による眼疾患、アレルギー性結膜炎、眼精疲労、ドライアイ、ものもらいなど、目に関する疾患を取り扱います。
        </p>
        <div class="more btn btn-sm thar-three"><a href="<?php echo $hm; ?>/medicalcontent/#medical-about"><span class="on">詳しく見る<i class="fas fa-long-arrow-alt-right"></i></span><span class="off">hd</span></a></div>
      </div>
    </div>
  </section>
  <!-- /CONTENT -->
  <!-- OPERATION -->
  <section class="operation cont">
    <h2 class="com_h2 up">
      <p>DAY OPERATION</p>
      <span>日帰り手術</span>
    </h2>
    <p class="txt top">
      大学病院での豊富な手術実績を持つ院長と副院長が手術を行います。<br class="pc">
      手術について、不安に感じていることや不明な点がございましたらお気軽にご相談ください。
    </p>
    <ul>
      <li>
        <a href="<?php echo $hm; ?>/dayoperation/#medical-content1">
          <div class="img">
            <img src="<?php echo $td; ?>/images/index/day_img3.jpg" alt="白内障手術">
            <div class="tl tl1 fadein">
              <p>No.1 白内障手術</p>
            </div>
          </div>
          <p class="txt2 fadein">
            濁った水晶体を取り除き、人工のレンズに置き替える手術です。<br class="pc">当院では、10分程度で終わる通常の白内障手術から１時間程度を<br class="pc">要する難易度の高い白内障手術も行っています。
          </p>
          <div class="view fadein">
            VIEW MORE<img src="<?php echo $td; ?>/images/index/arrow.svg" alt="">
          </div>

        </a>
      </li>
      <li>
        <a href="<?php echo $hm; ?>/dayoperation/#con2">
          <div class="img">
            <img src="<?php echo $td; ?>/images/index/day_img2.jpg" alt="多焦点眼内レンズ">
            <div class="tl tl2 fadein">
              <p>No.2 多焦点眼内レンズ</p>
            </div>
          </div>
          <p class="txt2 fadein">
            当院は選定療養認定施設であるため、<br class="pc">国内で承認を受けた多焦点眼内レンズをご選択いただけます。<br class="pc">ヨーロッパから直輸入の国内非承認の多焦点眼内レンズも多数取り扱っています。
          </p>
          <div class="view fadein">
            VIEW MORE<img src="<?php echo $td; ?>/images/index/arrow.svg" alt="">
          </div>

        </a>
      </li>
      <li>
        <a href="<?php echo $hm; ?>/dayoperation/#medical-content2">
          <div class="img">
            <img src="<?php echo $td; ?>/images/index/day_img1.jpg" alt="角膜移植手術">
            <div class="tl tl3 fadein">
              <p>No.3 角膜移植手術</p>
            </div>
          </div>
          <p class="txt2 fadein">
            病気や傷害などで角膜に異常が生じ、薬で改善が得られない場合に行います。<br class="pc">亡くなった方の健康な角膜を病気や傷害で異常が生じた角膜と<br class="pc">取り替える手術です。
          </p>
          <div class="view fadein">
            VIEW MORE<img src="<?php echo $td; ?>/images/index/arrow.svg" alt="">
          </div>

        </a>
      </li>
    </ul>
    <div class="more btn btn-sm thar-three"><a href="<?php echo $hm; ?>/dayoperation/"><span class="on">全ての手術を見る<i class="fas fa-long-arrow-alt-right"></i></span><span class="off">hd</span></a></div>
  </section>
  <!-- /OPERATION -->
  <!-- flow -->
  <section class="flow cont">
    <div class="cont_in left">
      <div class="box">
        <h2 class="com_h2 top">
          <p>FLOW</p>
          <span>診察の流れ</span>
        </h2>
        <p class="txt">
          このような方はお気軽にご相談ください。
        </p>
        <p class="txt2">
          受付時間:(平日) 09：00〜14：30(土曜) 09:00~11:00<br>
          診療時間:(平日) 09：00〜15：00(土曜) 09:00~12:30<br>
          ★ 土曜診療:完全予約制<br>
          ★ 手術時間:(月曜) 13:00~15:00(木曜) 09:00~15:00<br>
          ★ 休診日: 土曜午後、日曜・祝日<br>
          ※初診の方はお電話でご予約をお願いいたします。
        </p>
        <div class="more btn btn-sm thar-three"><a href="<?php echo $hm; ?>/flow"><span class="on">詳しく見る<i class="fas fa-long-arrow-alt-right"></i></span><span class="off">hd</span></a></div>
      </div>
    </div>
  </section>
  <!-- /flow -->
  <!-- news -->
  <!-- <section class="news cont">
  <div class="wrap">
  <h2 class="com_h2">
  <p>NEWS</p>
  <span>新着情報</span>
</h2>
<main class="content-wrap">
<div class="content-in">
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$number = 0;
$args = array(
  'post_type' => 'post', // カスタム投稿タイプ Products
  'posts_per_page' => 10,
  'paged' => $paged,
  'post_status' => 'publish',
);
if (is_month()) {
  $setMonth = get_the_date('m');
  $setYear = get_the_date('Y');
  $args['monthnum'] = $setMonth;
  $args['year'] = $setYear;
}
$the_query = new WP_Query($args);
if ($the_query->have_posts()) :
?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
<?php
    $terms = wp_get_object_terms($post->ID, 'category');
    foreach ($terms as $term) {
      $cat = $term->name;
      $slug = $term->slug;
    }
?>
<?php
    $category = get_the_category();
    $cat_name = $category[0]->cat_name;
?>
<article class="single">
<p class="info"><?php echo get_the_date("Y.m.d"); ?></p><span class="tag"><?php echo $cat_name; ?></span>
<p class="title">
<?php echo get_the_title(); ?>
</p>
<p class="link"><a href="<?php echo $hm; ?>/news/#post<?php the_ID(); ?>"></a></p>
</article>
<?php $number++; ?>
<?php endwhile; ?>
<?php if (($number % 2 - 1) == 0) : ?>
<article class="single dummy"></article>
<?php endif; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</main>
<div class="more btn btn-sm thar-three"><a href="<?php echo $hm; ?>/news"><span class="on">詳しく見る<i class="fas fa-long-arrow-alt-right"></i></span><span class="off">hd</span></a></div>
</div>
</section> -->
  <!-- /news -->
</div>
<!-- /index -->
<!-- f_slider pc-->
<section class="f_slider f_slider_pc">
  <div class="f_slide_in">
    <ul>
      <li><a><img src="<?php echo $td; ?>/images/common/photo1.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo2.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo3.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo4.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo5.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo6.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo7.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo8.jpg"></a></li>
      <li><a><img src="<?php echo $td; ?>/images/common/photo9.jpg"></a></li>
    </ul>
  </div>
</section>
<!-- /f_slider pc-->
<?php get_sidebar(); ?>
<script src="<?php echo $td; ?>/js/index-vue.js"></script>
<script>
  $(function() {
    $('.comingsoon').on('click', function() {
      alert('Coming Soon...');
      return false;
    });


  });

  jQuery(document).ready(function($) {
    $('.caratact-card-list').slick({
      dots: true,
      slidesToShow: 1,
      variableWidth: true, // スライド幅を固定サイズにする
      appendArrows: $('.caratact_arrow'), // 矢印を入れたい要素
      prevArrow: '<button class="slick-prev">←</button>',
      nextArrow: '<button class="slick-next">→</button>',
      appendDots: $('.custom-dots'), // ドットを入れたい要素
    });
  });
</script>


<?php get_footer();
