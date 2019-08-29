<?php get_header(); ?>

<section class="wrapper--narrow">

  <?php query_posts(array('posts_per_page' => -1)); ?>

  <?php get_template_part('components/listing'); ?>

</section>
<?php get_footer(); ?>