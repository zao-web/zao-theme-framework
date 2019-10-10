<?php
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Gutenberg_Starter_Theme
 * @since 1.0.0
 */

$discussion = ! is_page() && gutenberg_starter_theme_can_show_post_thumbnail() ? gutenberg_starter_theme_get_discussion_data() : null; ?>

<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

<?php if ( ! is_page() ) : ?>
<div class="entry-meta">
	<?php gutenberg_starter_theme_posted_by(); ?>
	<?php gutenberg_starter_theme_posted_on(); ?>
	<span class="comment-count">
		<?php
		if ( ! empty( $discussion ) ) {
			gutenberg_starter_theme_discussion_avatars_list( $discussion->authors );
		}
		?>
		<?php gutenberg_starter_theme_comment_count(); ?>
	</span>
	<?php
	// Edit post link.
		edit_post_link(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers. */
					__( 'Edit <span class="screen-reader-text">%s</span>', 'gutenberg-starter-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			),
			'<span class="edit-link">' . gutenberg_starter_theme_get_icon_svg( 'edit', 16 ),
			'</span>'
		);
	?>
</div><!-- .meta-info -->
<?php endif; ?>
