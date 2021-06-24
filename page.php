<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="article-title">
        <h1 itemprop="name"><?php the_title(); ?></h1>
    </div>
    <div class="article-content"><?php the_content(); ?></div>

    <div class="article__contact">
    <div class="article-contact">
      <a href="mailto:contact@jeandaviddaviet.fr" class="btn"><?php _e("Contactez-moi&nbsp;!", "jdd"); ?></a>
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
