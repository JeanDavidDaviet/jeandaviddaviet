<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="article__title">
        <h1 itemprop="name"><?php the_title(); ?></h1>
    </div>
    <div class="article__content"><?php the_content(); ?></div>

    <div class="article__contact">
      <a href="mailto:contact@jeandaviddaviet.fr" class="btn">Contactez-moi&nbsp;!</a>
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
