<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article itemscope itemtype="https://schema.org/Article" class="article-content">
    <h2 itemprop="name">
    	<a href="<?php the_field('link'); ?>" target="_blank" rel="noopener noreferrer"><?php the_title(); ?></a>
    	<time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small> - <?php echo get_the_date('d/m/Y'); ?></small></time>
    </h2>
    <?php the_content(); ?>
  </article>

<?php endwhile; endif; ?>
