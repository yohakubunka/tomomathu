<?php get_header(); ?>
<?php $td = get_template_directory_uri(); $hm = get_home_url();?>
<div class="contact">
<!-- mv -->
<section class="sv">
  <div class="sv_img"><img src="<?php echo $td;?>/images/contact/cont_mv.jpg" alt="メインビジュアル画像"></div>
  <div class="sv_txt">
    <h2>
      <p><span>お問い合わせ</span></p>
      <p>CONTACT</p>
    </h2>
  </div>
</section>
<!-- /mv -->
<!-- com_cont -->
<div class="com_cont">
  <p class="inq_text">
    ご入力の上、「入力内容を確認する」を押してください。<br>
    <span style="color:#ef634d;">*必須項目</span>
  </p>
<!-- contact_form -->
<div class="inq_form">
    <?php echo do_shortcode('[contact-form-7 id="5" title="test"]');?>
</div>
<!-- /contact_form -->
</div>
<!-- /com_cont -->
</div>
<script type="text/javascript" src="<?php echo $td;?>/js/adress.js"></script>
<script type="text/javascript" src="<?php echo $td;?>/js/tab_inq.js"></script>
<?php get_sidebar(); ?>
<?php get_footer();
