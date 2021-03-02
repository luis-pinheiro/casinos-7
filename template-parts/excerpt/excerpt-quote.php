<?php

/**
 * Show the appropriate content for the Quote post format.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage CASINOS_7
 * @since casinos7 1.0
 */

$content = get_the_content();

// If there is no quote or pullquote print the content.
if (has_block('core/quote', $content)) {
	CASINOS_7_print_first_instance_of_block('core/quote', $content);
} elseif (has_block('core/pullquote', $content)) {
	CASINOS_7_print_first_instance_of_block('core/pullquote', $content);
} else {
	the_excerpt();
}
