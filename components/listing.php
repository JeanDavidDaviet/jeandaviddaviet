<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article class="article-list-item">
    <h2 class="article-list-title">
    	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	<time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small> - <?php echo get_the_date('d/m/Y'); ?></small></time>
    </h2>
    <?php $categories = get_the_category(); if(!empty($categories)): foreach($categories as $categorie): if($categorie->term_id != 1 ):?>
      <p class="article-dossier"><a href="<?php echo get_category_link($categorie->term_id); ?>"><?php echo $categorie->name; ?></a></p>
    <?php endif; endforeach; endif; ?>
    <?php the_excerpt(); ?>
  </article>

<?php endwhile; endif; ?>
