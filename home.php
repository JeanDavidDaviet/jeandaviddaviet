<?php get_header(); ?>

  <?php query_posts(array('posts_per_page' => -1, 'category__not_in' => 22 )); // All posts not in the "News" Category ?>

  <?php get_template_part('components/listing'); ?>

<?php get_footer(); ?>
