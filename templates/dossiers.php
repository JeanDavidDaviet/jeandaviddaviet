<?php /* Template Name: Dossiers */
get_header(); ?>

  <?php foreach(get_categories(array('exclude' => array(1 /* Articles */ , 22 /* News */))) as $categorie): ?>

  <article itemscope itemtype="https://schema.org/Article" class="article__content">
    <h2 itemprop="name">
      <a href="<?php echo get_category_link($categorie->term_id); ?>"><?php echo $categorie->name; ?></a>
    </h2>
  </article>

  <?php endforeach; ?>

<?php get_footer(); ?>
