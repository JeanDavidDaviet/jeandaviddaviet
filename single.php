<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <article>
        <h1 itemprop="name" class="article-title"><?php the_title(); ?></h1>
        <time class="article-meta" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small><?php _e("Publié le", "jdd"); ?> <?php echo get_the_date('d/m/Y'); ?> <?php _e("par", "jdd"); ?> <?php echo get_the_author(); ?> <?php _e("dans", "jdd"); ?> <?php echo get_the_category_list(', '); ?></small></time>
        <?php if(get_post_type() === 'post' && time() - get_the_date('U') > YEAR_IN_SECONDS * 2): ?>
          <p class="article-outdated">Cet article a plus de <?php echo floor((time() - get_the_date('U')) / YEAR_IN_SECONDS); ?> ans et il se peut que son contenu ne soit plus à jour.</p>
        <?php endif; ?>
        <?php if(get_post_type() === 'link'): ?>
          <p><a href="<?php the_field('link'); ?>" target="_blank" rel="noopener noreferrer"><?php the_field('link'); ?></a></p>
        <?php endif; ?>
        <div class="article-content"><?php the_content(); ?></div>
      </article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
