<?php $articles = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3, 'category__not_in' => array( 22, 62 ) ]); if ( $articles->have_posts() ) : ?>
<div class="mt-12">
  <h3 class="font-bold text-2xl mt-12 mb-6"><?php _e("Les derniers articles", "jdd"); ?></h3>
  <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
  <p class="my-5"><a class="text-dark no-underline hover:text-light-blue dark:text-light-gray" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
  <?php endwhile; ?>
  <p class="my-5"><a class="text-light-blue hover:underline" href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><?php _e("Plus d'articles", "jdd"); ?></a></p>
</div>
<?php endif; ?>
