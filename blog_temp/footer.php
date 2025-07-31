<?php
$page_slug = get_post(get_the_ID())->post_name;
$single = get_post_type();
$td = get_template_directory_uri();
$hm = get_home_url();
?>
<!-- pagetop -->
<div class="page_top">
  <a href="#">
    <i class="fas fa-arrow-up"></i>
  </a>
</div>
<!-- /pagetop -->
<!-- bgm -->
<audio src="<?= get_template_directory_uri() ?>/audio/maou.mp3" id="audio" pause="pause" loop="loop"></audio>
<!-- bgm -->
<!-- f_about -->
<section class="f_about">
  <div class="box">
    <div class="in">
      <div class="f_logo">
        <img src="<?php echo $td; ?>/images/common/f_logo.png" alt="ともまつ眼科クリニック">
      </div>
      <p class="ad">
        〒482-0031 愛知県岩倉市八剱町大門出先33の1
        <a target="_blank" href="https://goo.gl/maps/bCVakMB9Cr2zxGGs7">Google Map　→</a><br>
        ★ 手術時間:(月曜・金曜) 13:00~15:00(木曜) 09:00~15:00 ★ 休診日: 土曜午後、日曜・祝日<br>★ 火・水は午後の診察も行っておりますが、12：30～13：30は検査の予約枠となります。<br>※初診の方はお電話でご予約をお願いいたします。
      </p>
      <table>
        <tbody>
          <tr class="tlb">
            <th>診療時間</th>
            <th>月</th>
            <th>火</th>
            <th>水</th>
            <th>木</th>
            <th>金</th>
            <th class="saturday">土</th>
            <th>日祝</th>
          </tr>
          <tr>
            <td class="tlb">
              <span>09:00~12:30</span><br>
              (受付終了 土曜日 11:00)
            </td>
            <td>●</td>
            <td>●</td>
            <td>●</td>
            <td class="syu">手術</td>
            <td>●</td>
            <td class="syu">●<br>
            <span>（完全予約制）</span>
            </td>
            <td>/</td>
          </tr>
          <tr>
            <td class="tlb">
              <span>12:30~15:00</span><br>
              (受付終了 14:30)
            </td>
            <td class="syu">手術</td>
            <td>●</td>
            <td>●</td>
            <td class="syu">手術</td>
            <td class="syu">手術</td>
            <td>/</td>
            <td>/</td>
          </tr>
        </tbody>
      </table>
      <div class="con_box pc">
        <div class="bt"><a href="<?php echo $hm; ?>/flow/"><i class="fas fa-book-open"></i>診察の流れ</a></div>
        <div class="bt"><a href="https://ec.tomomatsu-eye.com/" target="_blank"><i class="fas fa-shopping-cart"></i>オンラインストア</a></div>
        <div class="tell"><a href="tel:0587-58-5558"><i class="fas fa-mobile-alt"></i><span>0587-58-5558</span></a></div>
      </div>
    </div>
  </div>
  <div class="box">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2738.4296512245664!2d136.88053922403986!3d35.29206380551945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60030b8f4d398899%3A0x2ae103d8288e70cd!2z44Go44KC44G-44Gk55y856eR44Kv44Oq44OL44OD44Kv!5e0!3m2!1sja!2sjp!4v1678178584634!5m2!1sja!2sjp" height="100%" frameborder="0" style="border:0;width:100%;" allowfullscreen=""></iframe>
  </div>
</section>
<!-- /f_about -->
<!-- footer -->
<footer>
  <section class="f_top pc2">
    <div class="in">
      <div class="box">
        <p class="tl"><a href="<?php echo $hm; ?>">◇ トップ</a></p>
        <p class="tl"><a href="<?php echo $hm; ?>/facility">◇ 医院案内</a></p>
        <ul>
          <li><a href="<?php echo $hm; ?>/facility/">私たちのミッション</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content1">近隣の眼科医院の皆様へ</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content2">当院の特徴</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content3">医師紹介</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content4">院内と設備</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content5">アクセスと診療時間</a></li>
        </ul>
      </div>
      <div class="box">
        <p class="tl"><a href="<?php echo $hm; ?>/medicalcontent/">◇ 診療内容</a></p>
        <ul>
          <li><a href="<?php echo $hm; ?>/medicalcontent/">診療について</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content1">白内障</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content2">緑内障</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content3">加齢性黄斑変性症</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content4">まぶたの病気</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content5">オルソケラトロジー</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content6">低濃度アトロピン点眼剤</a></li>
        </ul>
      </div>
      <div class="box">
        <p class="tl"><a href="<?php echo $hm; ?>/dayoperation/">◇ 日帰り手術</a></p>
        <ul>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content1">白内障手術（多焦点眼内レンズなど対応）</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content2">角膜移植手術</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content3">網膜硝子体手術</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content4">緑内障手術</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content5">硝子体注射</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content6">まぶたの手術</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content7">レーザー治療</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content8">斜視手術</a></li>
          <li><a href="<?php echo $hm; ?>/dayoperation/#medical-content9">ボトックス注射</a></li>
        </ul>
      </div>
      <div class="box">
        <p class="tl"><a href="<?php echo $hm; ?>/flow">◇ 診察の流れ</a></p>
        <p class="tl"><a href="<?php echo $hm; ?>/news">◇ 新着情報</a></p>
        <p class="tl"><a href="https://ec.tomomatsu-eye.com/" target="_blank">◇オンラインストア</a></p>
        <p class="tl"><a href="<?php echo $hm; ?>/recruit">◇ 採用について</a></p>
        <p class="tl"><a href="<?php echo $hm; ?>/medical_check">◇ 問診票</a></p>
      </div>
    </div>
  </section>
  <section class="f-under">
    <p class="copy">
      Copyright(C) 2020 ともまつ眼科クリニック. All Rights Reserved.<br>
      <a href="https://yohaku-bunka.com/" target="_blank">PODUCED BY YOHAKU BUNKA</a>
    </p>
  </section>
</footer>
<!-- /footer -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJpemFHuPD1rHbHhbd59Nbd-BdnQszLR8"></script>
<script src="<?php echo $td; ?>/js/slick.js"></script>
<script src="<?php echo $td; ?>/js/scrolla.jquery.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
<!-- jquery & iScroll -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://raw.githubusercontent.com/tobia/Pause/master/jquery.pause.min.js"></script>
<script>
  var polyfilter_scriptpath = '/memocarilog-demo/css_filters_polyfill/lib/';
</script>
<script src="<?php echo $td; ?>/lib/contentloaded.js"></script>
<script src="<?php echo $td; ?>/lib/cssParser.js"></script>
<script src="<?php echo $td; ?>/lib/css-filters-polyfill.js"></script>
<script src="https://unpkg.com/scrollreveal"></script>
</script>
<script>
  ScrollReveal().reveal('.up', {
    duration: 2500,
    origin: 'bottom',
    distance: '300px',
    opacity: 0,
    reset: false
  });
  ScrollReveal().reveal('.top', {
    duration: 3000,
    origin: 'bottom',
    distance: '300px',
    opacity: 0,
    reset: false
  });
  ScrollReveal().reveal('.left', {
    duration: 2500,
    origin: 'left',
    distance: '300px',
    opacity: 0,
    reset: false
  });
  ScrollReveal().reveal('.right', {
    duration: 2500,
    origin: 'right',
    distance: '300px',
    opacity: 0,
    reset: false
  });
</script>

<script>
  jQuery(function($) {
    $('.animate').scrolla({
      once: true,
      mobile: true
    });
  });

  function clickEvent() {
    alert('coming soon...');
  }
  $(document).ready(function() {
    $('.drawer').drawer();
  });
  $(function() {
    var setElm = $('.f_slider'),
      slideSpeed = 4000;

    setElm.each(function() {
      var self = $(this),
        selfWidth = self.innerWidth(),
        findUl = self.find('ul'),
        findLi = findUl.find('li'),
        listWidth = findLi.outerWidth(),
        listCount = findLi.length,
        loopWidth = listWidth * listCount;

      findUl.wrapAll('<div class="f_slider_in" />');
      var selfWrap = self.find('.f_slider_in');

      if (loopWidth > selfWidth) {
        findUl.css({
          width: loopWidth
        }).clone().appendTo(selfWrap);

        selfWrap.css({
          width: loopWidth * 2
        });

        function loopMove() {
          selfWrap.animate({
            left: '-' + (loopWidth) + 'px'
          }, slideSpeed * listCount, 'linear', function() {
            selfWrap.css({
              left: '0'
            });
            loopMove();
          });
        };
        loopMove();

        setElm.hover(function() {
          selfWrap.pause();
        }, function() {
          selfWrap.resume();
        });
      }
    });
  });
  $(function() {
    var setElm = $('.f_slider_sp'),
      slideSpeed = 4000;

    setElm.each(function() {
      var self = $(this),
        selfWidth = self.innerWidth(),
        findUl = self.find('ul'),
        findLi = findUl.find('li'),
        listWidth = findLi.outerWidth(),
        listCount = findLi.length,
        loopWidth = listWidth * listCount;

      findUl.wrapAll('<div class="f_slider_in" />');
      var selfWrap = self.find('.f_slider_in');

      if (loopWidth > selfWidth) {
        findUl.css({
          width: loopWidth
        }).clone().appendTo(selfWrap);

        selfWrap.css({
          width: loopWidth * 2
        });

        function loopMove() {
          selfWrap.animate({
            left: '-' + (loopWidth) + 'px'
          }, slideSpeed * listCount, 'linear', function() {
            selfWrap.css({
              left: '0'
            });
            loopMove();
          });
        };
        loopMove();

        setElm.hover(function() {
          selfWrap.pause();
        }, function() {
          selfWrap.resume();
        });
      }
    });
  });
  jQuery(function() {
    jQuery(window).scroll(function() {
      jQuery('.fadein').each(function() {
        var elemPos = jQuery(this).offset().top;
        var scroll = jQuery(window).scrollTop();
        var windowHeight = jQuery(window).height();
        if (scroll > elemPos - windowHeight - 100) {
          jQuery(this).addClass('scrollin');
        }
      });
    });
  });
</script>
<!-- 設定ここから -->
<script type="text/javascript">
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/scroll_BG.js"></script>
<?php if ( is_home() || is_front_page() ) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/opening.js"></script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>