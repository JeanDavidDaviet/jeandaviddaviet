<?php get_header(); ?>

  <div class="catchphrase col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
    <img class="catchphrase__image" src="<?php echo get_template_directory_uri(); ?>/dist/img/jd.png" alt="">
    <blockquote class="catchphrase__quote">
      <p class="catchphrase__text">J'aide les organisations de petites et moyennes tailles à développer leur projets internets.</p>
      <p class="catchphrase__author reveal">– Jean-David Daviet</p>
    </blockquote>
  </div>

  <?php $articles = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3]); if ( $articles->have_posts() ) : ?>
  <div class="homepage-last">
    <h3>Les derniers articles</h3>
    <?php while ( $articles->have_posts() ) : $articles->the_post(); ?>
    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
    <?php endwhile; ?>
    <p><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>" class="more">Plus d'articles</a></p>
  </div>
  <?php endif; ?>

  <?php $dossiers = get_categories(array('exclude' => array(1 /* Articles */ , 22 /* News */))); if( !empty($dossiers) ) : ?>
  <div class="homepage-last">
    <h3>Les derniers dossiers</h3>
    <?php foreach($dossiers as $dossier): ?>
    <p><a href="<?php echo get_category_link($dossier->term_id); ?>"><?php echo $dossier->name; ?></a></p>
    <?php endforeach; ?>
    <p><a href="/dossiers" class="more">Plus de dossiers</a></p>
    <p><a href="#"></a></p>
  </div>
  <?php endif; ?>

<?php get_footer(); ?>
