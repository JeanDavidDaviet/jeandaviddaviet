<?php get_header(); ?>

  <?php if(have_posts()): while(have_posts()): the_post(); ?>

    <h1 itemprop="name" class="article-title"><?php the_title(); ?></h1>
    <div class="article-content"><?php the_content(); ?></div>


    <?php if($post->post_name === 'en-vrac' && isset($_GET['jd'])): $revisions = wp_get_post_revisions(); ?>
    <?php if(!empty($revisions)): ?>
      <ul class="test">
        <?php foreach(wp_get_post_revisions() as $revision): ?>
          <li><a href="<?php echo wp_nonce_url(admin_url('admin-ajax.php?action=get_page_revision&revision=' . $revision->ID), 'get_revision_' . $revision->ID); ?>"><?php echo esc_html($revision->post_date); ?></a></li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>

    <script>
      jQuery('.test a').on('click', function(e){
        jQuery.get(this.href, function(html){
          jQuery('.article-content').html(html);
        });
        e.preventDefault();
      })
    </script>
    <?php endif; ?>

    <div class="article-contact">
      <a href="mailto:contact@jeandaviddaviet.fr" class="btn"><?php _e("Contactez-moi&nbsp;!", "jdd"); ?></a>
    </div>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>
