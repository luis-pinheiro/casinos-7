<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CASINOS_7
 * @since casinos7 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php casinos7_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="container mx-auto site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'casinos7'); ?></a>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">