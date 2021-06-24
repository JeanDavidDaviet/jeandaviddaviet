<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article itemtype="https://schema.org/Article">
    <div class="article-title"><h1 itemprop="name"><?php the_title(); ?></h1></div>
    <div class="article-content">
      <?php the_post_thumbnail('post-thumbnail', array('class' => 'portfolio-big-thumbnail')); ?>
      <?php the_content(); ?>
    </div>
  </article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
