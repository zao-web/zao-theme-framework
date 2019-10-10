<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage Gutenberg_Starter_Theme
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'gutenberg-starter-theme' ); ?>">
		<?php
			if ( is_active_sidebar( 'sidebar-1' ) ) {
				?>
					<div class="widget-column footer-widget-1">
						<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php
			}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
