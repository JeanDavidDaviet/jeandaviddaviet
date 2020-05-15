<?php get_header(); ?>

  <?php query_posts(array('posts_per_page' => -1, 'category__not_in' => array( 22, 62 ) )); // All posts not in the "News" and "Brouillons" Category ?>

  <?php get_template_part('components/listing'); ?>

<?php get_footer(); ?>
