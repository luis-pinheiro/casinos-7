<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage CASINOS_7
 * @since casinos7 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()) :
	the_post();

	get_template_part('template-parts/content/content-single');

	if (is_attachment()) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: parent post link. */
				'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'casinos7'), '%title'),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) {
		comments_template();
	}

	// Previous/next post navigation.
	$casinos7_next = is_rtl() ? CASINOS_7_get_icon_svg('ui', 'arrow_left') : CASINOS_7_get_icon_svg('ui', 'arrow_right');
	$casinos7_prev = is_rtl() ? CASINOS_7_get_icon_svg('ui', 'arrow_right') : CASINOS_7_get_icon_svg('ui', 'arrow_left');

	$casinos7_next_label     = esc_html__('Next post', 'casinos7');
	$casinos7_previous_label = esc_html__('Previous post', 'casinos7');

	the_post_navigation(
		array(
			'next_text' => '<p class="meta-nav">' . $casinos7_next_label . $casinos7_next . '</p><p class="post-title">%title</p>',
			'prev_text' => '<p class="meta-nav">' . $casinos7_prev . $casinos7_previous_label . '</p><p class="post-title">%title</p>',
		)
	);
endwhile; // End of the loop.

get_footer();
