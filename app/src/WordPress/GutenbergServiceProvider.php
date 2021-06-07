<?php

namespace App\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

class GutenbergServiceProvider implements ServiceProviderInterface
{
	public function register( $container ) {
		// Nothing to register.
	}

	public function bootstrap( $container ) {
		add_filter( 'block_categories', [$this, 'registerGutenbergCategories'], 10, 2 );

		if ( function_exists( 'acf_register_block_type' ) ) {
			add_action( 'acf/init', [$this, 'registerGutenbergBlocks'] );
		}
	}

	public function registerGutenbergCategories( $categories, $post ) {
		/**
		 * Here you can register your own block category
		 */
		return array_merge(
			$categories,
			[
				[
					'slug'  => 'my-block-category',
					'title' => __( 'My Block Category', 'app' ),
					'icon'  => 'wordpress',
				]
			]
		);
	}

	public function registerGutenbergBlocks() {
		/**
		 * See https://www.advancedcustomfields.com/resources/acf_register_block_type/
		 */
		acf_register_block_type(
			'name'            => 'my-custom-block',
			'title'           => __( 'My Custom Block', 'app' ),
			'description'     => __( 'My Custom Block description', 'app' ),
			'render_template' => 'blocks/my-custom-block/block.php',
			'category'        => 'my-block-category',
		);
	}
}
