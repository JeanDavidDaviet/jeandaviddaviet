<?php get_header(); ?>

<?php get_template_part('components/catchphrase'); ?>

  <?php $testimonies = new WP_Query(['post_type' => 'temoignage', 'posts_per_page' => 2, 'order' => 'ASC']); if ( $testimonies->have_posts() ) : ?>
  <div class="testimonies">
    <div class="testimonies-controls">
      <svg class="testimony-arrow testimony-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
      <svg class="testimony-arrow testimony-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
    </div>
    <div class="testimony-slider">
      <?php while ( $testimonies->have_posts() ) : $testimonies->the_post(); ?>
      <div class="testimony">
      <?php the_content(); ?>
      </div>
      <?php endwhile; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php $articles = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3, 'category__not_in' => array( 22, 62 ) ]); if ( $articles->have_posts() ) : ?>
  <div class="mt-12">
    <h3 class="homepage-last-title"><?php _e("Les derniers articles", "jdd"); ?></h3>
    <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
    <p><a class="homepage-last-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php endwhile; ?>
    <p><a class="homepage-last-link-more" href="<?php echo get_permalink(get_option('page_for_posts')); ?>"><?php _e("Plus d'articles", "jdd"); ?></a></p>
  </div>
  <?php endif; ?>

  <?php $dossiers = get_categories(array('exclude' => array(1 /* Articles */ , 22 /* News */))); if( !empty($dossiers) ) : ?>
  <div class="mt-12">
    <h3 class="homepage-last-title"><?php _e("Les derniers dossiers", "jdd"); ?></h3>
    <?php foreach($dossiers as $dossier): ?>
    <p><a class="homepage-last-link" href="<?php echo get_category_link($dossier->term_id); ?>"><?php echo $dossier->name; ?></a></p>
    <?php endforeach; ?>
    <p><a href="<?php echo home_url('/dossiers'); ?>" class="homepage-last-link-more"><?php _e("Plus de dossiers", "jdd"); ?></a></p>
  </div>
  <?php endif; ?>

<?php get_footer(); ?>
