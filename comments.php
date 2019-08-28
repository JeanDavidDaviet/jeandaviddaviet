<?php

  static $discussion, $post_id;

  $current_post_id = get_the_ID();
  if ( $current_post_id === $post_id ) {
    return $discussion;
  } else {
    $post_id = $current_post_id;
  }

  $comments = get_comments(
    array(
      'post_id' => $current_post_id,
      'orderby' => 'comment_date_gmt',
      'order'   => get_option( 'comment_order', 'asc' ),
      'status'  => 'approve'
    )
  );

  $authors = array();
  foreach ( $comments as $comment ) {
    $authors[] = ( (int) $comment->user_id > 0 ) ? (int) $comment->user_id : $comment->comment_author_email;
  }

  $authors    = array_unique( $authors );
  $discussion = (object) array(
    'authors'   => array_slice( $authors, 0, 6 ),           /* Six unique authors commenting on the post. */
    'responses' => get_comments_number( $current_post_id ), /* Number of responses. */
  );
?>

<div class="wrapper--narrow comments'; ?>">

  <div class="<?php echo $discussion->responses > 0 ? 'comments-title-wrap' : 'comments-title-wrap no-responses'; ?>">
    <h2 class="comments__title"><?php echo have_comments() ? 'Rejoindre la conversation' : 'Laisser un commentaire'; ?></h2>
  </div>

  <?php if ( have_comments() ) : ?>

    <ol class="comments__list"><?php wp_list_comments( array( 'walker' => new Jdd_Walker_Comment(), 'short_ping' => true, 'style' => 'ol' ) ); ?></ol>
    <div class="comments__form">
      <?php
        comment_form(
          array(
            'id_form' => 'comments__form',
            'class_submit' => 'btn',
            'logged_in_as' => null,
            'title_reply'  => null
          )
        );
      ?>
    </div>

  <?php

  else : ?>

    <div class="comments__form">
      <?php
        comment_form(
          array(
            'class_submit' => 'btn',
            'id_form' => 'comments__form',
            'logged_in_as' => null,
            'title_reply'  => null
          )
        );
      ?>
    </div>

  <?php endif; ?>

</div>