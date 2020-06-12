<h2 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'dance-all-night' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>

<?php
//Get only the approved comments
$args = array(
    'status' => 'approve'
);
 
// The comment Query
$comments_query = new WP_Comment_Query;
$comments = $comments_query->query( $args ); ?>

<?php
// Comment Loop
if ( $comments ) {
 foreach ( $comments as $comment ) { ?>
 	<div class="comment-box"><span class="avatars"><?php echo get_avatar( get_the_author_meta('ID'), 64 ); ?></span> <span class="comment"><?php echo $comment->comment_content; ?></span></div>
 <?php }
} else {
 echo '<p>No comments found.</p>';
} ?>

<?php comment_form();

?>