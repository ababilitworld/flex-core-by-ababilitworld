<?php

	/**
	 * FlexCore By Ababil IT World
	 *
	 * @package ababilitworld/flex-core-by-ababilitworld
	 * @author  Ababil IT World
	 * @author-email  ababilitworld@gmail.com
	 *
	 * @wordpress-plugin
	 * Plugin Name:       FlexCore By Ababil IT World
	 * Plugin URI:        https://ababilitworld.com/wp-plugin/flex-core-by-ababilitworld
	 * Description:       The AbabilItWorld Plugins's Core Funtionalities, Exclusively by Ababil IT World.
	 * Version:           1.0.0
	 * Requires at least: 5.2
	 * Requires PHP:      7.4
	 * WC requires at least: 3.0.9
	 * WC tested up to: 6.4
	 * Author:            Ababil IT World
	 * Author URI:        https://ababilitworld.com/
	 * Author Email:      ababilitworld@gmail.com
	 * License:           GPL v3 or later
	 * License URI:       https://www.gnu.org/licenses/gpl-3.0.html
	 * Text Domain:       flex-auth-by-ababilitworld
	 * Domain Path:       /language
	 */

	/**
	 * Bootstrap the plugin.
	 */
	namespace AbabilItWorld\FlexCoreByAbabilitworld;

	(defined('ABSPATH') && defined('WPINC')) || die();

	require_once __DIR__ . '/vendor/autoload.php';

	defined( 'PLUGIN_NAME' ) || define( 'PLUGIN_NAME', plugin_basename(__FILE__) );
	defined( 'PLUGIN_VERSION' ) || define( 'PLUGIN_VERSION', '1.0.0' );
	defined( 'PLUGIN_DIR' ) || define( 'PLUGIN_DIR', dirname( __FILE__ ) );
	defined( 'PLUGIN_FILE' ) || define( 'PLUGIN_FILE', __FILE__ );
	defined( 'PLUGIN_URL' ) || define( 'PLUGIN_URL', plugins_url() . '/' . plugin_basename( dirname( __FILE__ ) ) );
	defined( 'PLUGIN_PRE_UNDS' ) || define( 'PLUGIN_PRE_UNDS', 'flex_core_by_ababilitworld' );
	defined( 'PLUGIN_PRE_HYPH' ) || define( 'PLUGIN_PRE_HYPH', 'flex-core-by-ababilitworld' );

	use Ababilitworld\FlexCoreByAbabilitworld\Plugin;
	use Ababilitworld\FlexCoreByAbabilitworld\Core\Library\Function\WpErrorHandler;
	use Ababilitworld\FlexCoreByAbabilitworld\Core\Library\Function\WpFunction;
	use Ababilitworld\FlexCoreByAbabilitworld\Core\Library\Util\Api\Firebase\PhpJwtHelper;
	
	new Plugin();
	new WpErrorHandler();
	new WpFunction();	
	new PhpJwtHelper();
		
	register_activation_hook(__FILE__, [Plugin::class, 'activate']);
	register_deactivation_hook(__FILE__, [Plugin::class, 'deactivate']);

	

	
