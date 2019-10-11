<?php get_header(); ?>

<section class="wrapper--narrow">

  <?php foreach(get_categories() as $categorie): ?>

  <article itemscope itemtype="https://schema.org/Article" class="article__content">
    <h2 itemprop="name">
      <a href="<?php echo get_category_link($categorie->term_id); ?>"><?php echo $categorie->name; ?></a>
    </h2>
  </article>
  
  <?php endforeach; ?>

</section>
<?php get_footer(); ?>