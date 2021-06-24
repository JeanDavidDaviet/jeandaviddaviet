<?php class Jdd_Walker_Comment extends Walker_Comment {

  /**
   * Outputs a comment in the HTML5 format.
   *
   * @see wp_list_comments()
   *
   * @param WP_Comment $comment Comment to display.
   * @param int        $depth   Depth of the current comment.
   * @param array      $args    An array of arguments.
   */
  protected function html5_comment( $comment, $depth, $args ) { ?>
    <li id="comment-<?php comment_ID(); ?>" <?php comment_class( $this->has_children ? 'parent' : '', $comment ); ?> itemprop="comment" itemscope itemtype="http://schema.org/Comment">
      <header>
        <h2>Vijay</h2>
        <?php $comment_timestamp = sprintf( __( '%1$s at %2$s', 'twentynineteen' ), get_comment_date( '', $comment ), get_comment_time() ); ?>
        <div class="comment-date"><?php echo $comment_timestamp; ?></div>
      </header>

      <?php if ( '0' == $comment->comment_approved ) : ?>
        <p class="comment-awaiting-moderation">Commentaire en attente de modération</p>
      <?php endif; ?>

      <div class="comment-content">
        <?php comment_text(); ?>
      </div>

    </li>

    <?php
    comment_reply_link(
      array_merge(
        $args,
        array(
          'add_below' => 'div-comment',
          'depth'     => $depth,
          'max_depth' => $args['max_depth'],
          'before'    => '<div class="comment-reply">',
          'after'     => '</div>',
        )
      )
    );
  }
}
