<?php
/**
 * Gutenberg Starter Theme back compat functionality
 *
 * Prevents Gutenberg Starter Theme from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Gutenberg_Starter_Theme
 * @since Gutenberg Starter Theme 1.0.0
 */

/**
 * Prevent switching to Gutenberg Starter Theme on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Gutenberg Starter Theme 1.0.0
 */
function gutenberg_starter_theme_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'gutenberg_starter_theme_upgrade_notice' );
}
add_action( 'after_switch_theme', 'gutenberg_starter_theme_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Gutenberg Starter Theme on WordPress versions prior to 4.7.
 *
 * @since Gutenberg Starter Theme 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function gutenberg_starter_theme_upgrade_notice() {
	$message = sprintf( __( 'Gutenberg Starter Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'gutenberg-starter-theme' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Gutenberg Starter Theme 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function gutenberg_starter_theme_customize() {
	wp_die(
		sprintf(
			__( 'Gutenberg Starter Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'gutenberg-starter-theme' ),
			$GLOBALS['wp_version']
		),
		'',
		array(
			'back_link' => true,
		)
	);
}
add_action( 'load-customize.php', 'gutenberg_starter_theme_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Gutenberg Starter Theme 1.0.0
 *
 * @global string $wp_version WordPress version.
 */
function gutenberg_starter_theme_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Gutenberg Starter Theme requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'gutenberg-starter-theme' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'gutenberg_starter_theme_preview' );
