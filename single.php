<?php get_header(); ?>


  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <section class="wrapper--narrow">
      <article itemtype="https://schema.org/Article">
        <div class="article__title"><h1 itemprop="name"><?php the_title(); ?></h1></div>
        <div class="article__content"><?php the_content(); ?></div>
      </article>
    </section>

    <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>