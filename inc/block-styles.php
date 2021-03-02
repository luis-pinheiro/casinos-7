<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage CASINOS_7
 * @since casinos7 1.0
 */

if (function_exists('register_block_style')) {
	/**
	 * Register block styles.
	 *
	 * @since casinos7 1.0
	 *
	 * @return void
	 */
	function CASINOS_7_register_block_styles()
	{
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'casinos7-columns-overlap',
				'label' => esc_html__('Overlap', 'casinos7'),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'casinos7-border',
				'label' => esc_html__('Borders', 'casinos7'),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'casinos7-border',
				'label' => esc_html__('Borders', 'casinos7'),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'casinos7-border',
				'label' => esc_html__('Borders', 'casinos7'),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'casinos7-image-frame',
				'label' => esc_html__('Frame', 'casinos7'),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'casinos7-latest-posts-dividers',
				'label' => esc_html__('Dividers', 'casinos7'),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'casinos7-latest-posts-borders',
				'label' => esc_html__('Borders', 'casinos7'),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'casinos7-border',
				'label' => esc_html__('Borders', 'casinos7'),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'casinos7-separator-thick',
				'label' => esc_html__('Thick', 'casinos7'),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'casinos7-social-icons-color',
				'label' => esc_html__('Dark gray', 'casinos7'),
			)
		);
	}
	add_action('init', 'CASINOS_7_register_block_styles');
}
