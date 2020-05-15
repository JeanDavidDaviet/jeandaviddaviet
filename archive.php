<?php get_header(); ?>

  <div class="category__description">
    <?php echo category_description(); ?>
  </div>

  <?php get_template_part('components/listing'); ?>

<?php get_footer(); ?>
