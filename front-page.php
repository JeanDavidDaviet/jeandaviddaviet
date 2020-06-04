<?php get_header(); ?>

  <div class="catchphrase col-md-8 col-md-offset-2 col-sm-6 col-sm-offset-3">
    <img class="catchphrase__image" src="<?php echo get_template_directory_uri(); ?>/dist/img/jd.png" alt="">
    <blockquote class="catchphrase__quote">
      <p class="catchphrase__text"><?php _e("J'aide les organisations de petites et moyennes tailles à développer leur projets internets.", "jdd"); ?></p>
      <p class="catchphrase__author reveal">– <?php _e("Jean-David Daviet", "jdd"); ?></p>
    </blockquote>
  </div>

  <div class="testimonies">
    <div class="testimonies-controls">
      <svg class="testimony-arrow testimony-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
      <svg class="testimony-arrow testimony-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 492 492" width="34" height="34"><path d="M382.7 226.8l-219-219c-5-5-11.8-7.8-19-7.8s-14 2.8-19 7.9l-16.2 16a27 27 0 000 38.1L293.4 246l-184 184a26.8 26.8 0 000 38l16 16.2a26.9 26.9 0 0038 0L382.8 265c5-5 7.8-11.9 7.8-19 0-7.3-2.7-14.1-7.8-19.2z"/></svg>
    </div>
    <div class="testimony-slider">
      <div class="testimony">
        <p class="testimony-content">
          <quote class="testimony-quote">Jean-David a été très réactif et à l’écoute, ce qui nous a permis d’avoir très rapidement le site web que nous voulions. Nous avons particulièrement apprécié sa disponibilité pendant la création du site et même après, une fois le site en ligne.</quote>
          <cite class="testimony-cite">–&nbsp;Capucine Zusslin, gérante <br />Insolem</cite>
        </p>
      </div>
      <div class="testimony">
        <p class="testimony-content">
          <quote class="testimony-quote">J’ai travaillé avec Jean-David pour la conception du site internet du projet Européen GRACE sous WordPress. Nous avions comme contrainte de développer le site en 3 mois et Jean-David a su relever le défi. <br><br>Nous avons beaucoup apprécié sa réactivité, son professionnalisme, son efficacité et sa force de proposition. Si vous cherchez un développeur web à l’écoute, qui comprends vos besoins et qui sait s’adapter à vos contraintes, je vous recommande de confier vos projets à Jean-David. <br><br>Jean-David a été très réactif et à l’écoute, ce qui nous a permis d’avoir très rapidement le site web que nous voulions. Nous avons particulièrement apprécié sa disponibilité pendant la création du site et même après, une fois le site en ligne.</quote>
          <cite class="testimony-cite">–&nbsp;Eliana LEGOUX, Corporate Executive Assistant <br />European Science Foundation</cite>
        </p>
      </div>
    </div>
  </div>

  <?php $articles = new WP_Query(['post_type' => 'post', 'posts_per_page' => 3, 'category__not_in' => array( 22, 62 ) ]); if ( $articles->have_posts() ) : ?>
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
