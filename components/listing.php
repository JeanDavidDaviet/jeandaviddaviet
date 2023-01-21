<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article class="article-list-item">
    <h2 class="article-list-title">
    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
    <p class="article-metas">
    	<span><time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><?php echo get_the_date('d/m/Y'); ?></time></span>
    <?php $categories = get_the_category(); $has_categories = false; if(!empty($categories)): foreach($categories as $key => $categorie): if($categorie->term_id != 1 ): $has_categories = true; ?>
      <span class="article-dossier"><?php echo $has_categories ? ', dans ' : ''; ?><a href="<?php echo get_category_link($categorie->term_id); ?>"><?php echo $categorie->name; ?></a></span>
    <?php endif; endforeach; endif; ?>
    </p>
    <?php if(has_excerpt() || get_post_type() === 'post'): ?><p class="article-excerpt"><?php the_excerpt(); ?></p><?php endif; ?>
  </article>

<?php endwhile; endif; ?>
