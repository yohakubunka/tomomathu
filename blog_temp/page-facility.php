<?php
define("description", "医院の特徴、医師、設備、アクセス、診療時間などを紹介します。");
define("title", "医院案内｜ともまつ眼科クリニック");
?>
<span id="hidden_nav_bg">
  <? get_header(); ?>
  <style>
    html {
      font-size: 13px !important;
    }
  </style>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slider-pro.min.css">
  <?php $td = get_template_directory_uri();
  $hm = get_home_url(); ?>
  <?php
  $parent_id    = get_post()->post_parent;             // 親ページのIDを取得
  $parent_slug  = get_post($parent_id)->post_name;     // 親ページのスラッグを取得
  $parent_title = get_post($parent_id)->post_title;    // 親ページのタイトルを取得
  $parent_url   = get_permalink($parent_id);           // 親ページの URL を表示
  ?>
</span>
<!-- facility -->
<main id="facility" class="no-index-page under_cont">
  <section id="flow_main_visual" class="no-index-page-sec">
    <!-- <div class="news_list_logo">
      <h1 class="pc2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
      </h1>
    </div> -->
    <div class="visual_text">
      <h2>FACILITY<br><span>医院案内</span></h2>
    </div>
  </section>
  <!-- flow-main-content -->
  <div class="flow-main-content">
    <!-- under_top -->
    <section class="under_top">
      <h2 class="under_h2 up">
        <p>OUR MISSION</p>
        <span>私たちのミッション</span>
      </h2>
      <p class="txt top">
        我々は、大学病院で培った高度な手術技術で<br>地域医療に貢献し続けます。
      </p>
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
    </section>
    <!-- /under_top -->
    <!-- medical_page_ank_navi -->
    <section id="medical_page_ank_navi" class="pc">
      <div class="container">
        <ul class="mx-auto">
          <li><a href="#content1"><span>近隣の眼科医院の皆様へ</span><br>▼</a></li>
          <li><a href="#content2"><span>当院の特徴</span><br>▼</a></li>
          <li><a href="#content3"><span>医師紹介</span><br>▼</a></li>
          <li><a href="#content4"><span>院内と設備</span><br>▼</a></li>
          <li><a href="#content5"><span>アクセスと診療時間</span><br>▼</a></li>
        </ul>
      </div>
    </section>
    <section id="dayope_page_ank_navi_sp" class="sp">
      <div class="container py-3">
        <input id="acd-check1" class="acd-check" type="checkbox">
        <label class="acd-label" for="acd-check1"><i class="fas fa-angle-down"></i>　医院案内</label>
        <div class="acd-content">
          <ul class="mx-auto">
            <li><a href="#content1"><span>▼ 近隣の眼科医院の皆様へ</span></a></li>
            <li><a href="#content2"><span>▼ 当院の特徴</span></a></li>
            <li><a href="#content3"><span>▼ 医師紹介</span></a></li>
            <li><a href="#content4"><span>▼ 院内と設備</span></a></li>
            <li><a href="#content5"><span>▼ アクセスと診療時間</span></a></li>
          </ul>
        </div>
      </div>
    </section>
    <!-- /medical_page_ank_navi -->
    <!-- medical-about -->
    <section id="medical-about">
      <div class="container" id="content1">
        <div class="row about-content01">
          <div class="col-md-7 left-content up">
            <h3>FOR AROUND<br><span>近隣の眼科医院の皆様へ</span></h3>
            <p class="medical-con-p2">当院では高度な医療機器をもとに地域の皆様に最善な医療を提供できるよに努めており、難症例白内障や網膜硝子体疾患の治療も日帰りで行えるように対応しております。</p>
            <p class="medical-con-p2">
              患者様を御紹介いただいた際は、迅速に対応させていただきます。
            </p>
          </div>
          <img class="pc" src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/<?php echo $parent_slug; ?>-img02.jpg" />
        </div>
        <div class="row sp about-content01-sp">
          <div class="col-12 px-0 mt-5">
            <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/<?php echo $parent_slug; ?>-img02.jpg" />
          </div>
        </div>
      </div>
      <div class="txt_box top">
        <p class="tl">当院で対応可能な手術</p>
        <p class="txt">・白内障手術（多焦点眼内レンズなど対応）・難症例白内障手術・角膜移植手術・網膜硝子体手術・緑内障手術・硝子体注射・まぶたの手術・レーザー治療・斜視手術<br>・ボトックス注射</p>
      </div>
    </section>
    <!-- /medical-about -->
    <!-- commitment -->
    <section class="commitment" id="content2">
      <h2 class="under_h2 up">
        <p>COMMITMENT</p>
        <span>当院の特徴</span>
      </h2>
      <div class="img top"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/commitment_img.jpg" alt="当院の特徴"></div>
      <div class="txt_box up">
        <div class="in">
          <div class="num">Point.1</div>
          <div class="tl">多焦点眼内レンズ</div>
          <p class="txt">厚生労働省認定の選定療養認定施設であるため、プレミアム（多焦点）眼内レンズを使った白内障手術を受けることができます。</p>
        </div>
        <div class="in">
          <div class="num">Point.2</div>
          <div class="tl">眼科手術について</div>
          <p class="txt">手術を中心とし、白内障手術だけでなく、高度な技術を要する角膜移植手術や硝子体手術も行っています。</p>
        </div>
      </div>
    </section>
    <!-- /commitment -->
    <!-- doctors -->
    <section class="doctors" id="content3">
      <h2 class="under_h2 up">
        <p>DOCTORS</p>
        <span>医師紹介</span>
      </h2>
      <div class="box top">
        <div class="name_box">
          <div class="tag">院長</div>
          <div class="name">
            <p>友松 威</p>
            <span>Takeshi Tomomatsu</span>
          </div>
        </div>
        <p class="txt">
          岩倉市にお住まいの皆さま、こんにちは。院長の友松　威(ともまつ　たけし)です。<br><br>
          私の生まれは隣の小牧市ですが、福井県の大学に進学したため、福井大学病院に長く勤務しておりました。<br>
          専門は小児眼科と硝子体手術です。大学病院に勤務していたおかげで多くの経験を積ませていただき、雑誌「眼のいい病院」に名前が載るほどになりました。<br>
          開業すると決めたとき、小児眼科の専門知識や硝子体手術などの手術を最大限に活かして、地域医療に貢献できる場所で開業したいと考えておりました。<br>
          いろいろ調べてみたところ、岩倉市なら私が専門としてきた小児眼科や硝子体手術が地域住民の方のお役に立つのではないかと思い、岩倉市での開業を決意いたしました。<br>
          白内障や硝子体などの日帰り手術だけではなく、お子さまの斜視や弱視の診療、日常的な眼の悩み、糖尿病などの持病に伴う眼の症状なども診療いたします。<br>
          地域住民の皆さまに信頼されるようにスタッフ一同、努力してまいりますので、どうぞよろしくお願いいたします。
        </p>
        <div class="in">
          <div class="in_box up">
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/doctors_img1.jpg" alt=""></div>
          </div>
          <div class="in_box top">
            <div class="tl">略歴</div>
            <div class="txt_box">
              <ul>
                <li>・愛知県小牧市生まれ</li>
                <li>・2001年 福井医科大学 卒業</li>
                <li>・福井医科大学医学部附属病院 眼科研修医</li>
                <li>・2003年 舞鶴共済病院</li>
                <li>・2005年 福井大学医学部附属病院 大学院</li>
                <li>・2006年 福井県越前市中村病院眼科</li>
                <li>・2009年 福井大学医学部眼科学 助教</li>
                <li>・2017年 ともまつ眼科クリニック 院長</li>
              </ul>
            </div>
          </div>
          <div class="in_box up">
            <div class="tl">認定・資格</div>
            <div class="txt_box">
              <ul>
                <li>・日本眼科学会専門医</li>
                <li>・医学博士</li>
                <li>・PDT(光線力学的療法)認定医</li>
                <li>・ボトックス講習・実技セミナー修了認定医</li>
                <li>・オルソケラトロジー講習会受講認定医</li>
                <li>・屈折矯正手術講習会受講認定医</li>
              </ul>
            </div>
          </div>
          <div class="in_box top">
            <div class="tl">所属学会</div>
            <div class="txt_box">
              <ul>
                <li>・日本弱視斜視学会 (弱視・斜視を専門とする医師の登録医)</li>
                <li>・日本小児眼科学会(小児眼科を専門とする医師の登録医)</li>
                <li>・日本網膜硝子体学会</li>
                <li>・日本糖尿病眼学会</li>
                <li>・日本緑内障学会</li>
                <li>・日本角膜移植学会</li>
                <li>・日本角膜学会</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="box up">
        <div class="name_box">
          <div class="tag">副院長</div>
          <div class="name">
            <p>友松 洋子</p>
            <span>Yoko Tomomatsu</span>
          </div>
        </div>
        <p class="txt">
          岩倉市の皆さま、こんにちは。<br>
          院長の妻で友松　洋子(ともまつ　ようこ)と申します。<br><br>

          私の生まれは福井県の武生市です。福井大学病院に勤務しておりましたが、ご縁があり岩倉市で開業させていただくことになりました。<br>
          大学病院では眼科一般外来と眼瞼（がんけん）手術を担当しており、眼瞼手術は美容にも大きく関係するので美容の勉強も行ってまいりました。<br>
          開院後は眼科診療だけではなく、ヒアルロン酸やボトックス注射などの美容に関する治療もさせていただきたいと思います。<br>
          岩倉市の第1印象ですが、私が生まれた武生市に似ていると思いました。<br>
          全く知らない土地で不安に思っておりましたが、安心しました。<br>
          患者さまのご要望に誠心誠意お応えできるよう努力してまいりますので、どうぞよろしくお願いいたします。
        </p>
        <div class="in">
          <div class="in_box up">
            <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/doctors_img2.jpg" alt=""></div>
          </div>
          <div class="in_box top">
            <div class="tl">略歴</div>
            <div class="txt_box">
              <ul>
                <li>・福井県武生市生まれ</li>
                <li>・2008年 福井大学医学部卒業</li>
                <li>・福井県立病院 研修医</li>
                <li>・2009年 福井大学医学部附属病院 研修医</li>
                <li>・2010年 福井大学医学部附属病院 眼科研修医</li>
                <li>・2012年 福井大学医学部附属病院 大学院</li>
                <li>・2017年 ともまつ眼科クリニック 副院長</li>
              </ul>
            </div>
          </div>
          <div class="in_box up">
            <div class="tl">認定・資格</div>
            <div class="txt_box">
              <ul>
                <li>・日本眼科学会専門医</li>
                <li>・医学博士</li>
                <li>・視覚障害者用補装具適合認定医</li>
                <li>・ボトックス講習・実技セミナー修了認定医</li>
                <li>・オルソケラトロジー講習会受講認定医</li>
                <li>・屈折矯正手術講習会受講認定医</li>
              </ul>
            </div>
          </div>
          <div class="in_box top">
            <div class="tl">所属学会</div>
            <div class="txt_box">
              <ul>
                <li>・日本眼科学会</li>
                <li>・日本緑内障学会</li>
                <li>・日本抗加齢医学会</li>
                <li>・日本眼形成再建外科学会</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /doctors -->
    <!-- facility_cont -->
    <section class="facility_cont" id="content4">
      <div class="in">
        <h2 class="under_h2 up">
          <p>FACILITY</p>
          <span>院内と設備</span>
        </h2>
        <!-- サムネイルスライダー -->
        <div id="slider_wrap">
          <ul id="slider">
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_1.jpg" alt="スライダー画像">
              <div class="tl">外観</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_2.jpg" alt="スライダー画像">
              <div class="tl">受付</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_3.jpg" alt="スライダー画像">
              <div class="tl">明室検査室</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_4.jpg" alt="スライダー画像">
              <div class="tl">暗室検査室</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_5.jpg" alt="スライダー画像">
              <div class="tl">中待合室</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_6.jpg" alt="スライダー画像">
              <div class="tl">処置室</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_8.jpg" alt="スライダー画像">
              <div class="tl">第一診察室</div>
            </li>
            <li class="slide-item"><img data-lazy="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_7.jpg" alt="スライダー画像">
              <div class="tl">第二診察室</div>
            </li>
          </ul>
          <ul id="thumbnail-list">
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_1.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_2.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_3.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_4.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_5.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_6.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_8.jpg" alt="サムネイル画像"></li>
            <li class="thumbnail-item"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider_7.jpg" alt="サムネイル画像"></li>
          </ul>
        </div>
        <!-- /サムネイルスライダー -->
        <!-- 横スライダー -->
        <div class="slider_2_wrap up">
          <div id="slider_2" class="slider-pro">
            <div class="sp-slides">
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider2_1.jpg" alt=""></div>
                <div class="tl">グリーンレーザー光凝固装置</div>
                <p class="txt">眼底疾患や緑内障を治療する機械です。光エネルギーを用いて網膜周辺部や黄斑部の手術を行います。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider2_2.jpg" alt=""></div>
                <div class="tl">超音波白内障手術装置</div>
                <p class="txt">最も普及している超音波白内障手術装置です。短い時間で手術ができるので、患者様の負担が少なく手術を行うことができます。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider2_4.jpg" alt=""></div>
                <div class="tl">手術用顕微鏡</div>
                <p class="txt">眼科の手術は、ミクロンの世界で行われます。肉眼での治療ですと安全の確保が難しいため、眼科手術の場合、手術用の顕微鏡が必須です。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider2_3.jpg" alt=""></div>
                <div class="tl">硝子体・白内障手術装置</div>
                <p class="txt">日本中の硝子体術者の信頼を得ている最新の硝子体手術機械です。硝子体手術はもちろん、難症例白内障手術時にも対応できます。</p>
              </div>
            </div>
          </div>
          <h3>手術機器</h3>
        </div>
        <!-- /横スライダー -->
        <!-- 横スライダー2 -->
        <div class="slider_2_wrap top">
          <div id="slider_3" class="slider-pro">
            <div class="sp-slides">
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider3_1.jpg" alt=""></div>
                <div class="tl">ハンドヘルドレフラクトメーター<br>（屈折度測定装置）</div>
                <p class="txt">椅子に座って機械を覗き込むことができないお子さんの屈折度を測定することができます。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider3_2.jpg" alt=""></div>
                <div class="tl">オートレフケラトメーター<br>（屈折度測定装置）</div>
                <p class="txt">屈折や角膜の曲率半径を測る機械です。どのくらいの近視や乱視があるかという他覚的屈折検査と、角膜曲率半径（角膜の丸み具合）を同時に測ります。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider3_3.jpg" alt=""></div>
                <div class="tl">ノンコンタクトトノメーター（眼圧計）</div>
                <p class="txt">プシュッと空気が出る機械です。角膜に空気を噴射して角膜のへこみ具合を測り眼圧を測定する器械です。機械が直接眼に触れないので（空気だけ）眼圧のスクリーニングに用います。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider3_4.jpg" alt=""></div>
                <div class="tl">オートレンズメーター（度数測定装置）</div>
                <p class="txt">現在お使いのメガネの度数を調べることができる機械です。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider3_5.jpg" alt=""></div>
                <div class="tl">液晶視力表</div>
                <p class="txt">一般的に使われる視力検査の機械です。液晶画面に視力表が映し出されます。立体視などの検査も行えます。</p>
              </div>
            </div>
          </div>
          <h3>明室検査機器</h3>
        </div>
        <!-- /横スライダー2 -->
        <!-- 横スライダー3 -->
        <div class="slider_2_wrap up">
          <div id="slider_4" class="slider-pro">
            <div class="sp-slides">
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider4_1.jpg" alt=""></div>
                <div class="tl">自動視野計</div>
                <p class="txt">明るさの違う光が、さまざまな場所に出現し、光が見えたらブザーを押していただきます。視野を確認することができます。緑内障の早期発見や視神経疾患、網膜疾患などを調べるのに効果的な機器です。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider4_2.jpg" alt=""></div>
                <div class="tl">角膜内皮細胞撮影装置</div>
                <p class="txt">角膜の一番内側の内皮細胞の数や、大きさ、形を調べる検査です。特にコンタクトレンズ装用や白内障手術前後に測定し、角膜の細胞数をチェックします。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider4_3.jpg" alt=""></div>
                <div class="tl">YAGレーザー</div>
                <p class="txt">白内障の手術のあと、何年かすると、人工レンズを入れた袋がにごって、視力が低下することがあります（後発白内障）。その治療を行う機械です。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider4_4.jpg" alt=""></div>
                <div class="tl">３次元眼底画像撮影装置</div>
                <p class="txt">非常に細かいレベルの血流まで画像化できる機械です。糖尿病網膜症や加齢黄斑変性などの眼底の血管の異常を伴う病気の診断に使用します。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider4_5.jpg" alt=""></div>
                <div class="tl">光学式眼軸長測定装置</div>
                <p class="txt">白内障の手術に必要な眼軸長(眼の長さ)や角膜の丸みや前房深度、水晶体厚みなど多くの部分の測定を目に触れることなく一度に測定します。</p>
              </div>
            </div>
          </div>
          <h3>暗室検査機器</h3>
        </div>
        <!-- /横スライダー3 -->
        <!-- 横スライダー4 -->
        <div class="slider_2_wrap top">
          <div id="slider_5" class="slider-pro">
            <div class="sp-slides">
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider5_1.jpg" alt="" class="sp-image"></div>
                <div class="tl">ポータブル手術顕微鏡</div>
                <p class="txt">処置室に設置している顕微鏡です。美容処置の際も、繊細な施術が可能になるよう使用します。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider5_2.jpg" alt="" class="sp-image"></div>
                <div class="tl">スリットランプ（細隙灯顕微鏡）</div>
                <p class="txt">診察室で行う検査です。結膜、涙点から角膜、前房、虹彩、瞳孔、水晶体、硝子体などの組織を観察し、肉眼ではわからない眼球内の異常を見つけ出します。</p>
              </div>
              <div class="sp-slide">
                <div class="img"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/slider5_3.jpg" alt="" class="sp-image"></div>
                <div class="tl">手持眼圧計</div>
                <p class="txt">ほとんど刺激のない、目に優しい眼圧計です。シュッと空気が出る空気眼圧計が苦手な方、小児の眼圧測定などに使用します。</p>
              </div>
            </div>
          </div>
          <h3>その他</h3>
        </div>
        <!-- /横スライダー4 -->
      </div>
    </section>
    <!-- /facility_cont -->
    <!-- access -->
    <section class="access" id="content5">
      <h2 class="under_h2 up">
        <p>ACCESS</p>
        <span>アクセスと診療時間</span>
      </h2>
      <div class="img top"><img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $parent_slug; ?>/access_img.jpg" alt="当院の特徴"></div>
      <div class="txt_box top">
        <div class="in">
          <div class="tl">アクセス方法</div>
          <div class="tl_sub">◆車でお越しの方</div>
          <p class="txt">
            県道25号線「中本町西葭原交差点」から1.1km<br>
            三州食品岩倉工場の目の前<br>
          </p>
          <div class="tl_sub">◆駐車場</div>
          <p class="txt">
            駐車場：22台完備<br>
          </p>
        </div>
        <div class="in">
          <div class="tl">診療時間</div>
          <div class="tl_sub">◆受付時間・診療時間</div>
          <p class="txt">
            平日受付時間:09：00〜14：30<br>土曜受付時間：09:00~11:00 <br>
            平日診療時間:09：00〜15：00<br>土曜診療時間：09:00~12:30（完全予約制）
          </p>
          <div class="tl_sub">◆休診日</div>
          <p class="txt">土曜午後、日曜、祝日</p>
        </div>
      </div>
    </section>
    <!-- /access -->
  </div>
  <!-- /flow-main-content -->
</main>
<!-- /facility -->
<script type="text/javascript">
  $(function() {
    var slider = "#slider"; // スライダー
    var thumbnailItem = "#thumbnail-list .thumbnail-item"; // サムネイル画像アイテム

    // サムネイル画像アイテムに data-index でindex番号を付与
    $(thumbnailItem).each(function() {
      var index = $(thumbnailItem).index(this);
      $(this).attr("data-index", index);
    });

    // スライダー初期化後、カレントのサムネイル画像にクラス「thumbnail-current」を付ける
    // 「slickスライダー作成」の前にこの記述は書いてください。
    $(slider).on('init', function(slick) {
      var index = $(".slide-item.slick-slide.slick-current").attr("data-slick-index");
      $(thumbnailItem + '[data-index="' + index + '"]').addClass("thumbnail-current");
    });
    //slickスライダー初期化
    $(slider).slick({
      autoplay: true,
      arrows: false,
      fade: true,
      infinite: false //これはつけましょう。
    });
    //サムネイル画像アイテムをクリックしたときにスライダー切り替え
    $(thumbnailItem).on('click', function() {
      var index = $(this).attr("data-index");
      $(slider).slick("slickGoTo", index, false);
    });

    //サムネイル画像のカレントを切り替え
    $(slider).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
      $(thumbnailItem).each(function() {
        $(this).removeClass("thumbnail-current");
      });
      $(thumbnailItem + '[data-index="' + nextSlide + '"]').addClass("thumbnail-current");
    });
  });
  $(document).ready(function($) {
    $('#slider_2').sliderPro({
      width: 400, //横幅
      arrows: true, //左右の矢印
      buttons: true, //ナビゲーションボタンを出す
      slideDistance: 20, //スライド同士の距離
      visibleSize: '100%', //前後のスライドを表示
    });
  });
  $(document).ready(function($) {
    $('#slider_3').sliderPro({
      width: 400, //横幅
      arrows: true, //左右の矢印
      buttons: true, //ナビゲーションボタンを出す
      slideDistance: 20, //スライド同士の距離
      visibleSize: '100%', //前後のスライドを表示
    });
  });
  $(document).ready(function($) {
    $('#slider_4').sliderPro({
      width: 400, //横幅
      arrows: true, //左右の矢印
      buttons: true, //ナビゲーションボタンを出す
      slideDistance: 20, //スライド同士の距離
      visibleSize: '100%', //前後のスライドを表示
    });
  });
  $(document).ready(function($) {
    $('#slider_5').sliderPro({
      width: 400, //横幅
      arrows: true, //左右の矢印
      buttons: true, //ナビゲーションボタンを出す
      slideDistance: 20, //スライド同士の距離
      visibleSize: '100%', //前後のスライドを表示
    });
  });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.sliderPro.min.js"></script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>