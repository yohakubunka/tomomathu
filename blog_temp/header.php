<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">
  <title><?php wp_title('|', true, 'right');
          bloginfo('name'); ?></title>

  <meta name="description" content="<?php bloginfo('description'); ?>">

  <?php if (!is_front_page()) : ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/rereboot.css">
  <?php endif; ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.min.css">
  <?php wp_head(); ?>
  <script src="https://kit.fontawesome.com/e0d2c0f172.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js"></script>
  <script src="https://use.typekit.net/shk3ebq.js"></script>
  <script type="text/javascript" src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif+JP&display=swap" rel="stylesheet">
  <!-- drawer.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/drawer.css">
  <script>
    (function(d) {
      var config = {
          kitId: 'iry8sup',
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
  <script type="text/javascript">
    $(function() {
      var $win = $(window),
        $main = $('.index'),
        $nav = $('.site-header'),
        $smnav = $('.s_fix'),
        navHeight = $nav.outerHeight(),
        navPos = $nav.offset().top,
        fixedClass = 'h_transform';
      fixedsmClass = 's_transform';
      $win.on('load scroll', function() {
        var value = $(this).scrollTop();
        if (value > 100) {
          $nav.addClass(fixedClass);
          $smnav.addClass(fixedsmClass);
        } else {
          $nav.removeClass(fixedClass);
        }
      });
    });
  </script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-71029282-41"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-71029282-41');
  </script>
  <!-- /Global site tag (gtag.js) - Google Analytics -->
  <meta name="google-site-verification" content="e-fUZy7opwZy_jYKPkjiDEfEhKBtFwVQaX4YJ7TJQ24" />
</head>
<?php $td = get_template_directory_uri();
$hm = get_home_url(); ?>

<body class="drawer drawer--right">
  <header id="pagetop">
    <!-- pc_tab_header -->
    <!-- <ul class="wrap pc2 site-header">
      <li class="wrap_li">
        <a class"li_h" href="<?php echo $hm; ?>/"><img src="<?php echo $td; ?>/images/common/h_logo.png" width="200px" alt="ともまつ眼科クリニック"></a>
      </li>
      <li class="wrap_li">
        <a class"li_h" href="<?php echo $hm; ?>/">トップ</a>
      </li>
      <li class="wrap_li">
        <a class"li_h" href="<?php echo $hm; ?>/facility">医院案内</a>
        <ul class="in">
          <li><a href="<?php echo $hm; ?>/facility/">私たちのミッション</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content1">近隣の眼科医院の皆様へ</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content2">当院の特徴</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content3">医師紹介</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content4">院内と設備</a></li>
          <li><a href="<?php echo $hm; ?>/facility/#content5">アクセスと診療時間</a></li>
        </ul>
      </li>
      <li class="wrap_li">
        <a class"li_h" href="<?php echo $hm; ?>/medicalcontent/">診療内容</a>
        <ul class="in">
          <li><a href="<?php echo $hm; ?>/medicalcontent/">診療について</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content1">白内障</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content2">緑内障</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content3">加齢性黄斑変性症</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content4">まぶたの病気</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content5">オルソケラトロジー</a></li>
          <li><a href="<?php echo $hm; ?>/medicalcontent/#medical-content6">低濃度アトロピン点眼剤</a></li>
        </ul>
      </li>
      <li class="wrap_li">
        <a class"li_h" href="<?php echo $hm; ?>/dayoperation/">日帰り手術</a>
        <ul class="in">
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
      </li>
      <li class="wrap_li"><a class="li_h" href="<?php echo $hm; ?>/flow">診察の流れ</a></li>
      <li class="wrap_li"><a class="li_h" href="<?php echo $hm; ?>/news">新着情報</a></li>
      <li class="wrap_li"><a class="li_h" href="<?php echo $hm; ?>/recruit">採用について</a></li>
      <li class="wrap_li button">
        <a class="li_h" href="tel:0587-58-5558"><i class="fas fa-mobile-alt"></i>0587-58-5558</a>
        <a class="li_h" href="<?php echo $hm; ?>/medical_check"><i class="fas fa-file-medical"></i>問診票</a>
      </li>
    </ul> -->
    <div class="site-header new_header">
      <div class="logo-wrap">
        <a class"li_h" href="<?php echo $hm; ?>/"><img src="<?php echo $td; ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック"></a>
      </div>
      <div class="header-info-wrap">
        <div class="header-info">
          <div class="info-buttons">
            <a href="<?php echo $hm; ?>/facility/#content5"><i class="fas fa-map-marker-alt"></i>交通アクセス</a>
            <a href="https://ec.tomomatsu-eye.com/" target="_blank"><i class="fas fa-shopping-cart"></i>オンラインショップ</a>
          </div>
          <ul class="header-links">
            <li><a href="<?php echo $hm; ?>/facility/">医療案内</a></li>
            <li><a href="<?php echo $hm; ?>/medicalcontent">診療内容</a></li>
            <li><a href="<?php echo $hm; ?>/dayoperation/">日帰り手術</a></li>
            <li><a href="<?php echo $hm; ?>/flow">診療の流れ</a></li>
            <li><a href="<?php echo $hm; ?>/news">新着情報</a></li>
            <li><a href="<?php echo $hm; ?>/recruit">採用について</a></li>
            <li><a href="<?php echo $hm; ?>/medical_check/">問診表</a></li>
          </ul>
        </div>
        <div class="humberger">
          <p>MENU</p>
          <span class="line"></span>
          <span class="line"></span>
        </div>
      </div>

      <nav class="menu-panel">
        <div class="menu-inner">
          <div class="menu-info">
            <a class"li_h" href="<?php echo $hm; ?>/"><img src="<?php echo $td; ?>/images/common/full-logo.svg" alt="ともまつ眼科クリニック"></a>
            <div class="menu-tel">
              <i class="fas fa-phone-alt"></i>
              <p>0578-58-5558</p>
            </div>
            <div class="reception_wrap">
              <div class="reception">
                <p class="title">受付時間</p>
                <div class="time_wrap">
                  <p>9：00～14：30（平日）</p>
                  <p>9：00～11：00（土曜日）<span>※完全予約制</span></p>
                </div>
              </div>
              <p class="first">※初診の方はお電話でご予約をお願いいたします。</p>
            </div>
          </div>

          <div class="menu-links">
            <div class="menu-item">
              <a href="<?php echo $hm; ?>/" class="menu-title">トップ</a>
              <div class="menu-margin">
                <a href="<?php echo $hm; ?>/facility/" class="menu-title menu-open">医療案内</a>
                <ul>
                  <li><a class="internal-link" href="<?php echo $hm; ?>/facility/">私たちのミッション</a></li>
                  <li><a class="internal-link" href="<?php echo $hm; ?>/facility/#content1">近隣の眼科医院の皆様へ</a></li>
                  <li><a class="internal-link" href="<?php echo $hm; ?>/facility/#content2">当院の特徴</a></li>
                  <li><a class="internal-link" href="<?php echo $hm; ?>/facility/#content3">医師紹介</a></li>
                  <li><a class="internal-link" href="<?php echo $hm; ?>/facility/#content4">院内と設備</a></li>
                  <li><a class="internal-link" href="<?php echo $hm; ?>/facility/#content5">アクセスと診療時間</a></li>
                </ul>
              </div>
            </div>

            <div class="menu-item">
              <a href="<?php echo $hm; ?>/medicalcontent" class="menu-title menu-open">診療内容</a>
              <ul>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/">診療について</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/#medical-content1">白内障</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/#medical-content2">緑内障</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/#medical-content3">加齢性黄斑変性症</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/#medical-content4">まぶたの病気</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/#medical-content5">オルソケラトロジー</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/medicalcontent/#medical-content6">低濃度アトロピン点眼剤</a></li>
              </ul>
            </div>

            <div class="menu-item">
              <a href="<?php echo $hm; ?>/dayoperation/" class="menu-title menu-open">日帰り手術</a>
              <ul>
                <li>
                  <a href="<?php echo $hm; ?>/dayoperation/#medical-content1" class="internal-link">
                    白内障手術<br>
                    <span>（多焦点眼内レンズなど対応）</span>
                  </a>
                </li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content2">角膜移植手術</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content3">網膜硝子体手術</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content4">緑内障手術</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content5">硝子体注射</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content6">まぶたの手術</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content7">レーザー治療</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content8">斜視手術</a></li>
                <li><a class="internal-link" href="<?php echo $hm; ?>/dayoperation/#medical-content9">ボトックス注射</a></li>
              </ul>
            </div>
            <div class="menu-item">
              <a href="<?php echo $hm; ?>/flow" class="menu-title">診療の流れ</a>
              <a href="<?php echo $hm; ?>/recruit" class="menu-title">採用について</a>
              <a href="<?php echo $hm; ?>/news" class="menu-title">新着情報</a>
            </div>
          </div>
        </div>

        <div class="buttons">
          <a href="<?php echo $hm; ?>/facility/#content5"><i class="fas fa-map-marker-alt"></i>交通アクセス</a>
          <a href="https://ec.tomomatsu-eye.com/" target="_blank"><i class="fas fa-shopping-cart"></i>オンラインショップ</a>
          <a href="tel:0587-58-5558" class="tell-button"><i class="fas fa-phone-alt"></i>0578-58-5558</a>
        </div>

        <div class="reception_wrap_sp">
          <div class="reception">
            <p class="title">受付時間</p>
            <div class="time_wrap">
              <p>9：00～14：30（平日）</p>
              <p>9：00～11：00（土曜日）<span>※完全予約制</span></p>
            </div>
          </div>
          <p class="first">※初診の方はお電話でご予約をお願いいたします。</p>
        </div>

      </nav>


    </div>
    <!-- /pc_tab_header -->
    <div class="tab" role="banner">
      <!-- <button type="button" class="drawer-toggle drawer-hamburger">
        <span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span>
      </button> -->

      <nav class="drawer-nav" role="navigation">
        <ul class="drawer-menu">
          <li><a class="drawer-menu-item" href="<?php echo $hm; ?>/">トップ</a></li>
          <li class="drawer-dropdown">
            <a class="drawer-menu-item" data-target="#" href="<?php echo $hm; ?>/facility/" data-toggle="dropdown" role="button" aria-expanded="false">
              医院案内 <span class="drawer-caret"></span>
            </a>
            <ul class="drawer-dropdown-menu">
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/facility/">私たちのミッション</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/facility/#content1">近隣の眼科医院の皆様へ</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/facility/#content2">当院の特徴</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/facility/#content3">医師紹介</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/facility/#content4">院内と設備</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/facility/#content5">アクセスと診療時間</a></li>
            </ul>
          </li>
          <li class="drawer-dropdown">
            <a class="drawer-menu-item" href="<?php echo $hm; ?>/medicalcontent" data-toggle="dropdown" role="button" aria-expanded="false">
              診療内容 <span class="drawer-caret"></span>
            </a>
            <ul class="drawer-dropdown-menu">
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/">診療について</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/#medical-content1">白内障</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/#medical-content2">緑内障</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/#medical-content3">加齢性黄斑変性症</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/#medical-content4">まぶたの病気</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/#medical-content5">オルソケラトロジー</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/medicalcontent/#medical-content6">低濃度アトロピン点眼剤</a></li>
            </ul>
          </li>
          <li class="drawer-dropdown">
            <a class="drawer-menu-item" data-target="#" href="<?php echo $hm; ?>/dayoperation" data-toggle="dropdown" role="button" aria-expanded="false">
              日帰り手術 <span class="drawer-caret"></span>
            </a>
            <ul class="drawer-dropdown-menu">
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/">日帰り手術について</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content1">白内障手術（多焦点眼内レンズなど対応）</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content2">角膜移植手術</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content3">網膜硝子体手術</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content4">緑内障手術</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content5">硝子体注射</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content6">まぶたの手術</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content7">レーザー治療</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content8">斜視手術</a></li>
              <li><a class="drawer-dropdown-menu-item" href="<?php echo $hm; ?>/dayoperation/#medical-content9">ボトックス注射</a></li>
            </ul>
          </li>
          <li><a class="drawer-menu-item" href="<?php echo $hm; ?>/flow">診察の流れ</a></li>
          <li><a class="drawer-menu-item" href="<?php echo $hm; ?>/news">新着情報</a></li>
          <li><a class="drawer-menu-item" href="https://ec.tomomatsu-eye.com/" target="_blank">オンラインストア</a></li>
          <li><a class="drawer-menu-item" href="<?php echo $hm; ?>/recruit">採用について</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <?php if (is_home() || is_front_page()) : ?>
    <?php get_template_part('template-parts/opening'); ?>
  <?php endif; ?>

  <!-- /t_header -->
  <!-- /t_header -->