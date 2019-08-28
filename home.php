<?php get_header(); ?>

<section class="wrapper--narrow">

  <?php query_posts(array('posts_per_page' => -1)); if(have_posts()): while(have_posts()): the_post(); ?>

    <article itemscope itemtype="https://schema.org/Article" class="article__content">
      <h2 itemprop="name">
      	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      	<time datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small> - <?php echo get_the_date('d/m/Y'); ?></small></time>
      </h2>
      <?php $categories = get_the_category(); if(!empty($categories)): foreach($categories as $categorie): if($categorie->term_id != 1 ):?>
        <p class="article__dossier"><a href="<?php echo get_category_link($categorie->term_id); ?>"><?php echo $categorie->name; ?></a></p>
      <?php endif; endforeach; endif; ?>
      <?php the_excerpt(); ?>
    </article>
  <?php endwhile; endif; ?>

</section>
<?php get_footer(); ?>