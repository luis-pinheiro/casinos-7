<?php

/**
 * Customize API: CASINOS_7_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage CASINOS_7
 * @since casinos7 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since casinos7 1.0
 *
 * @see WP_Customize_Control
 */
class CASINOS_7_Customize_Notice_Control extends WP_Customize_Control
{
	/**
	 * The control type.
	 *
	 * @since casinos7 1.0
	 *
	 * @var string
	 */
	public $type = 'casinos-7-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since casinos7 1.0
	 *
	 * @return void
	 */
	public function render_content()
	{
?>
		<div class="notice notice-warning">
			<p><?php esc_html_e('To access the Dark Mode settings, select a light background color.', 'casinos7'); ?></p>
			<p><a href="<?php echo esc_url(__('https://wordpress.org/support/article/casinos-7/#dark-mode-support', 'casinos7')); ?>">
					<?php esc_html_e('Learn more about Dark Mode.', 'casinos7'); ?>
				</a></p>
		</div>
<?php
	}
}
