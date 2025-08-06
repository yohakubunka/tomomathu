<?php
define("description", "当院からのお知らせ・ニュースです。");
define("title", "新着情報｜ともまつ眼科クリニック");
?>
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
          <ul class="collapse_category_list ul-a">
            <li class="cat-item cat-item-2"><a href="<?php echo esc_url(home_url('/')); ?>news/">すべて</a></li>
            <?php
            $categories = wp_list_categories('title_li=&show_count=1&taxonomy=category&echo=0');
            $categories = preg_replace('/<\/a> \(([0-9]+)\)/', ' <span class="count">\\1</span></a>', $categories);
            echo $categories;
            ?>
          </ul>
          <h3 style="margin-top:50px;">ARCHIVE</h3>
          <ul class="className">
            <?php wp_get_archives('type=monthly&post_type=post'); ?>
          </ul>
        </div>
        <div class="col-md-10 archive-area">
          <?php $paged = get_query_var('paged') ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged,
          );
          $myposts = new WP_Query($args);
          if ($myposts->have_posts()): while ($myposts->have_posts()): $myposts->the_post();
          ?>
              <?php
              $terms = wp_get_object_terms($post->ID, 'category');
              foreach ($terms as $term) {
                $cat = $term->name;
                $slug = $term->slug;
              }
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
<?php get_sidebar(); ?>
<?php get_footer(); ?>