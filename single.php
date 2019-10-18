<?php

$year = (int)substr($post->post_date, 0, 4);
$monthnum = (int)substr($post->post_date, 5, 2);
if(get_query_var('year') !== $year || get_query_var('monthnum') !== $monthnum){
  $post_new_permalink = home_url("news/{$year}/{$monthnum}/{$post->post_name}");
  wp_redirect($post_new_permalink, 301);exit;
}

get_header();

?>


  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <section class="wrapper--narrow">
      <article itemtype="https://schema.org/Article">
        <div class="article__title"><h1 itemprop="name"><?php the_title(); ?></h1></div>
        <time class="article__meta" datetime="<?php echo get_the_date('Y-m-d'); ?>" itemprop="datePublished"><small>Publié le <?php echo get_the_date('d/m/Y'); ?> par <?php echo get_the_author(); ?> dans <?php echo get_the_category_list(',') ?></small></time>
        <div class="article__content"><?php the_content(); ?></div>
      </article>
    </section>

    <?php if ( comments_open() || get_comments_number() ) { comments_template(); } ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>