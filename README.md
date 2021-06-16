# Gutenberg Service Provider
Implementation of the [WPEmerge framework](https://docs.wpemerge.com/#/framework/overview) to generate new Gutenberg blocks with [Advanced Custom Fields](https://www.advancedcustomfields.com/resources/acf_register_block_type/).

## Installation

You can directly clone this repository __inside__ your WordPress theme folder, in case you have not previously installed WPEmerge.

Then copy the contents of the `functions-example.php` file to the beginning of your `functions.php` file.

If you already had WPEmerge installed or are using its starter, you must do the following:

1. Copy the `GutenbergServiceProvider.php` file to the `app/src/WordPress` folder

2. Edit the `app/config.php` file and add the following to the providers configuration array:
~~~
'providers' => [
	\App\WordPress\GutenbergServiceProvider::class,
],
~~~
