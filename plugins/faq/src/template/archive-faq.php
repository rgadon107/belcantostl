<?php
/**
 * FAQ Archive Template
 *
 * @package     spiralWebDb\FAQ\Template;
 * @since       1.0.0
 * @author      Robert A. Gadon
 * @link        http://spiralwebdb.com
 * @license     GNU-2.0+
 */

namespace spiralWebDb\FAQ\Template;

use spiralWebDb\FAQ\Asset;

use function spiralWebDb\FAQ\_get_plugin_directory;

Asset\enqueue_script_ondemand();

remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'genesis_loop', __NAMESPACE__ . '\do_faq_archive_loop' );

/**
 * Do the FAQ Archive Loop and render out the HTML.
 *
 * NOTE: The variables are set to call the right HTML
 * markup and the 'container.php' view file.
 *
 * @since 1.0.0
 *
 * @return void
 */
function do_faq_archive_loop() {
	require_once __DIR__ . '/helpers.php';
	$records = get_posts_grouped_by_term( 'faq', 'topic' );

	if ( ! $records ) {
		echo '<p>Sorry, there are no FAQs.</p>';

		return;
	}

	$use_term_container = true;
	$show_term_name     = true;
	$is_calling_source  = 'template';

	foreach ( $records as $record ) {
		$term_slug = $record['term_slug'];

		include _get_plugin_directory() . '/src/views/container.php';
	}
}

/**
 *  Loop through and render out the FAQs
 *
 * @since 1.0.1
 *
 * @param array $faqs
 *
 * @return void
 */
function loop_and_render_faqs( array $faqs ) {
	$attributes = array(
		'show_icon' => 'dashicons dashicons-arrow-down-alt2',
		'hide_icon' => 'dashicons dashicons-arrow-up-alt2',
	);

	foreach ( $faqs as $faq ) {
		$post_title = $faq['post_title'];
		$content    = do_shortcode( $faq['post_content'] );
		$show_icon  = esc_attr( $attributes['show_icon'] );
		$hide_icon  = esc_attr( $attributes['hide_icon'] );

		include _get_plugin_directory() . '/src/views/faq.php';
	}
}

genesis();
