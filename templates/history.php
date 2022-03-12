<?php /* Template Name: History */
$revisions = wp_get_post_revisions();
get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

  <h1 itemprop="name" class="article-title"><?php the_title(); ?></h1>
  <div class="article-content"><?php the_content(); ?></div>

  <?php if(!empty($revisions)): ?>
    <div class="history-revisions">
      <h3 class="history-revisions-title">Remonter dans le temps :</h3>
      <p class="history-revisions-helper">Chaque lien va mettre à jour le contenu en fonction de ce qu'il y avait à la date de mise à jour de la page.</p>
      <ul class="list history-revisions-list">
        <?php foreach(wp_get_post_revisions() as $revision): ?>
          <li class="history-revision-item"><a class="history-revision-link" href="<?php echo wp_nonce_url(admin_url('admin-ajax.php?action=get_page_revision&revision=' . $revision->ID), 'get_revision_' . $revision->ID); ?>"><?php echo mysql2date('d/m/Y', $revision->post_date); ?></a></li>
        <?php endforeach; ?>
      </ul>

      <script>
        Array.from(document.querySelectorAll('.history-revision-link')).forEach(link => {
          link.addEventListener('click', async (e) => {
            fetch(e.target.href).then((response) => {
              response.text().then((html) => {
                document.querySelector('.article-content').innerHTML = html;
              })
            }).catch((error) => {
              console.log(error);
            })
            e.preventDefault();
          })
        })
      </script>
    </div>
  <?php endif; ?>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
