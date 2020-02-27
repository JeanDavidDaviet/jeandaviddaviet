<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <article itemtype="https://schema.org/Article">
        <div class="article__title"><h1 itemprop="name"><?php the_title(); ?></h1></div>
        <time class="article__meta" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small>Publié le <?php echo get_the_date('d/m/Y'); ?> par <?php echo get_the_author(); ?> dans <?php echo get_the_category_list(',') ?></small></time>
        <div class="article__content"><?php the_content(); ?></div>
      </article>

    <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
