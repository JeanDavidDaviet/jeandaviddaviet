<?php get_header(); ?>

  <div class="catchphrase col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
    <img class="catchphrase__image" src="<?php echo get_template_directory_uri(); ?>/dist/img/jd.png" alt="">
    <blockquote class="catchphrase__quote">
      <p class="catchphrase__text"><?php _e("J'aide les organisations de petites et moyennes tailles à développer leur projets internets.", "jdd"); ?></p>
      <p class="catchphrase__author reveal">– <?php _e("Jean-David Daviet", "jdd"); ?></p>
    </blockquote>
  </div>

  <?php $articles = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]); if ( $articles->have_posts() ) : ?>
  <div class="homepage-last">
    <h3><?php _e("Les derniers articles", "jdd"); ?></h3>
    <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php endwhile; ?>
    <p><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="more"><?php _e("Plus d'articles", "jdd"); ?></a></p>
  </div>
  <?php endif; ?>

  <?php $dossiers = get_categories(array('exclude' => array(1 /* Articles */ , 22 /* News */))); if( !empty($dossiers) ) : ?>
  <div class="homepage-last">
    <h3><?php _e("Les derniers dossiers", "jdd"); ?></h3>
    <?php foreach($dossiers as $dossier): ?>
    <p><a href="<?php echo get_category_link($dossier->term_id); ?>"><?php echo $dossier->name; ?></a></p>
    <?php endforeach; ?>
    <p><a href="/dossiers" class="more"><?php _e("Plus de dossiers", "jdd"); ?></a></p>
    <p><a href="#"></a></p>
  </div>
  <?php endif; ?>

<?php get_footer(); ?>
