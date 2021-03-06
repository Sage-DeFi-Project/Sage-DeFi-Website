<?php
/**
 * Default settings traits, shared with other classes.
 *
 * @package Neve\Customizer\Defaults
 */

namespace Neve\Customizer\Defaults;

/**
 * Trait Layout
 *
 * @package Neve\Customizer\Defaults
 */
trait Layout {
	/**
	 * Get the sidebar layout alignment
	 *
	 * @param string $control_id the control id.
	 *
	 * @return string
	 */
	private function sidebar_layout_alignment_default( $control_id ) {
		if ( neve_is_new_skin() ) {
			$full_width = [
				'neve_blog_archive_sidebar_layout',
				'neve_other_pages_sidebar_layout',
				'neve_single_product_sidebar_layout',
			];
			if ( in_array( $control_id, $full_width, true ) ) {
				return 'full-width';
			}

			return 'right';
		}

		if ( $control_id === 'neve_single_product_sidebar_layout' ) {
			return 'full-width';
		}

		return 'right';
	}

	/**
	 * Get the sidebar layout width.
	 *
	 * @param string $control_id the control id.
	 *
	 * @return int
	 */
	private function sidebar_layout_width_default( $control_id ) {
		if ( neve_is_new_skin() ) {
			$full_width = [
				'neve_blog_archive_content_width',
				'neve_other_pages_content_width',
				'neve_single_product_content_width',
			];
			if ( in_array( $control_id, $full_width, true ) ) {
				return 100;
			}
		}

		// 70 is default on both new & old.
		return 70;
	}

	/**
	 * Get grid colum default.
	 *
	 * @return string
	 */
	private function grid_columns_default() {
		return neve_is_new_skin() ? '{"desktop":3,"tablet":2,"mobile":1}' : '{"desktop":1,"tablet":1,"mobile":1}';
	}
}
