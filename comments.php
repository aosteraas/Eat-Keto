<?php if ( post_password_required() ) {
	return;
} ?>
	<div id="comments" class="comments-area">
		<?php if ( have_comments() ) : ?>
			<h3 class="comments-title">
				<?php
				printf( _nx( 'One comment on “%2$s”', '%1$s comments on “%2$s”', get_comments_number(), 'comments title'),
					number_format_i18n( get_comments_number() ), get_the_title() );
				?>
			</h3>
				<ul class="list-unstyled">
				<?php
					// Register Custom Comment Walker
					require_once('class-wp-bootstrap-comment-walker.php');

					wp_list_comments( array(
						'style'         => 'ul',
						'short_ping'    => true,
						'avatar_size'   => '64',
						'walker'        => new Bootstrap_Comment_Walker(),
					) );
				?>
				</ul><!-- .comment-list -->
		<?php endif; ?>
		<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
			<p class="no-comments">
				<?php _e( 'Comments are closed.' ); ?>
			</p>
		<?php endif; ?>
		<?php comment_form(); ?>
	</div>