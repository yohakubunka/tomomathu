<? get_header(); ?>
<span id="hidden_nav_bg">
  <? get_header(); ?>
</span>
<main id="news_list" class="no-index-page">
  <section id="news_list_main_visual" class="no-index-page-sec">
    <!-- <div class="news_list_logo">
      <h1 class="pc2">
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/h_logo.png" alt="ともまつ眼科クリニック">
      </h1>
    </div> -->
    <div class="visual_text">
      <h2>NEWS<br><span>新着情報</span></h2>
    </div>
  </section>
  <section id="list-col">
    <div class="container">
      <div class="row">

        <div class="col-md-2 left-nav">
          <h3>CATEGORY</h3>
          <?php
          $cat_all = get_terms("category", "fields=all&get=all");
          foreach ($cat_all as $value):
          ?>
            <p><a href="<?php echo get_category_link($value->term_id); ?>"><?php echo $value->name; ?></a></p>
          <?php endforeach; ?>


          <?php if (have_posts()): while (have_posts()): the_post(); ?> <!-- ループ開始 -->
              <?php
              $category = get_the_category();
              $cat_name = $category[0]->cat_name;
              $cat_slug = $category[0]->category_nicename;
              ?>
              <?php echo $cat_name; ?>
          <?php endwhile;
          endif; ?> <!-- ループ終了 -->
          <h3 style="margin-top:50px;">ARCHIVE</h3>
          <ul class="monthly-list">
            <?php wp_get_archives('post_type=news&type=monthly&show_post_count=1'); ?>
          </ul>
        </div>

        <div class="col-md-10 archive-area">
          <!--https://qiita.com/flatsato/items/8ca02303760140d2a7ed-->
          <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'news',
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged,
          );
          $myposts = new WP_Query($args);
          if ($myposts->have_posts()): while ($myposts->have_posts()): $myposts->the_post();
          ?>
              <div class="archive-part-wrap" id="post<?php the_ID(); ?>">
                <div class="archive-part top">
                  <p class="all-data"><span class="time-data"><?php echo get_the_date('Y.m.d'); ?></span><span class="archive-cateogory"><?php echo $cat; ?></span></p>
                  <p class="archive-title"><?php the_title(); ?></p>
                  <div class="archive-content"><?php the_content(); ?></div>
                </div>
              </div>

          <?php endwhile;
          endif;
          wp_reset_postdata(); ?>

          <?php
          if (function_exists('wp_pagenavi')) {
            wp_pagenavi(array('query' => $myposts));
          }
          ?>
          <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?>
        </div>

      </div>


    </div>
  </section>
</main>
<?php get_footer(); ?>