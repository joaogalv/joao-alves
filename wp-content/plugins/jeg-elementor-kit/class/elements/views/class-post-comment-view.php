<?php
/**
 * Post Comment View Class
 *
 * @package jeg-elementor-kit
 * @author Jegtheme
 * @since 1.5.0
 */

namespace Jeg\Elementor_Kit\Elements\Views;

/**
 * Class Post_Comment_View
 *
 * @package Jeg\Elementor_Kit\Elements\Views
 */
class Post_Comment_View extends View_Abstract {
	/**
	 * Build block content
	 */
	public function build_content() {
		if ( jeg_is_editor_elementor() ) {
			add_filter( 'comments_open', function( $open, $post_id ) {
				return array( true, $post_id );
			}, null, 2 );
		}

		ob_start();
		comments_template();
		$content = ob_get_contents();
		ob_end_clean();
		return $this->render_wrapper( 'post-comment', $content );
	}
}
