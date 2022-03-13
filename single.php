<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

      <article itemtype="https://schema.org/Article">
        <h1 itemprop="name" class="p-0 text-4xl leading-5"><?php the_title(); ?></h1>
        <time class="block mb-8" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small><?php _e("Publié le", "jdd"); ?> <?php echo get_the_date('d/m/Y'); ?> <?php _e("par", "jdd"); ?> <?php echo get_the_author(); ?> <?php _e("dans", "jdd"); ?> <?php echo get_the_category_list(', '); ?></small></time>
        <div class="article-content"><?php the_content(); ?></div>
      </article>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
