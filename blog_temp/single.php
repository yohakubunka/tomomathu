<?php get_header(); ?>
<?php $td = get_template_directory_uri();$page_slug = get_post(get_the_ID())->post_name; $single = get_post_type();?>
<script>
  window.location.href = 'https://ten-efforts.com/'; // 通常の遷移
</script>
<?php get_footer();
