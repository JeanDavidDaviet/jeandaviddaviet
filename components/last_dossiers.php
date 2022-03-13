<?php $dossiers = get_categories(array('exclude' => array(1 /* Articles */ , 22 /* News */))); if( !empty($dossiers) ) : ?>
<div class="mt-12">
  <h3 class="font-bold text-2xl mt-12 mb-6"><?php _e("Les derniers dossiers", "jdd"); ?></h3>
  <?php foreach($dossiers as $dossier): ?>
  <p class="my-5"><a class="text-dark no-underline hover:text-light-blue dark:text-light-gray" href="<?php echo get_category_link($dossier->term_id); ?>"><?php echo $dossier->name; ?></a></p>
  <?php endforeach; ?>
  <p class="my-5"><a class="text-light-blue hover:underline" href="<?php echo home_url('/dossiers'); ?>" class="homepage-last-link-more"><?php _e("Plus de dossiers", "jdd"); ?></a></p>
</div>
<?php endif; ?>
