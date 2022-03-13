<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <article itemscope itemtype="https://schema.org/Article" class="article-content">
    <h2 itemprop="name">
    	<a class="font-bold" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    	<time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small> - <?php echo get_the_date('d/m/Y'); ?></small></time>
    </h2>
    <?php $categories = get_the_category(); if(!empty($categories)): foreach($categories as $categorie): if($categorie->term_id != 1 ):?>
      <p class="mt-[-4] text-base"><a href="<?php echo get_category_link($categorie->term_id); ?>"><?php echo $categorie->name; ?></a></p>
    <?php endif; endforeach; endif; ?>
    <?php the_excerpt(); ?>
  </article>

<?php endwhile; endif; ?>
