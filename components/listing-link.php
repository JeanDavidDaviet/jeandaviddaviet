<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article class="article-list-item">
    <h2 class="article-list-title">
    	<a href="<?php the_field('link'); ?>" target="_blank" rel="noopener noreferrer"><?php the_title(); ?></a>
    </h2>
    <p class="article-metas">
      <span><time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished">le <?php echo get_the_date('d/m/Y'); ?></time></span>
    </p>
    <div class="article-excerpt"><?php the_content(); ?></div>
  </article>

<?php endwhile; endif; ?>
