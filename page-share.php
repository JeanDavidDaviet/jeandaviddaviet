<?php

if(isset($_POST) && isset($_POST['title']) && isset($_POST['description'])){
    $query = http_build_query([
        'title' => $_POST['title'],
        'link' => $_POST['description'],
    ]);
    wp_redirect(admin_url('post-new.php?post_type=link&' . $query));
    die;
}
get_header();
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <article>
        <h1 class="article-title"><?php the_title(); ?></h1>
        <div class="article-content"><?php the_content(); ?></div>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>

