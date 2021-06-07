<?php
/**
 * WPEmerge Configuration
 *
 * @link https://docs.wpemerge.com/#/framework/configuration
 *
 * @package App
 */

return [
	/**
	 * Array of ServiceProviders
	 */
	'providers' => [
		\App\WordPress\GutenbergServiceProvider::class,
	],
	/**
	 * Routes, View Composers, and other config should go after this comment
	 */
];
