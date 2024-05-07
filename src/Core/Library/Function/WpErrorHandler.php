<?php
    namespace Ababilitworld\FlexCoreByAbabilitworld\Core\Library\Function;

    (defined( 'ABSPATH' ) && defined( 'WPINC' )) || die();
	
	if ( ! class_exists( '\Ababilitworld\FlexCoreByAbabilitworld\Core\Library\Function\WpErrorHandler' ) ) 
	{
		class WpErrorHandler 
		{
			public $wp_error;

			public function __construct()
			{
				$this->wp_error = new \WP_Error();
				add_action('admin_notices', array($this, 'wp_error_log' ) );
			}

			public function wp_add_error($handle,$message,$data)
			{
				$this->wp_error->add($handle,$message,$data);
			}

			public function wp_error_log($log_type='display')
			{				
				if($this->wp_error->has_errors() && $log_type == 'display')
				{
					foreach($this->wp_error->get_error_messages() as $error)
					{
						$class = 'notice notice-error';
						printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), wp_kses_post( $error ) );
					}					
				}
			}

			/**
			 * Initializes the FlexCoreByAbabilitworld class
			 *
			 * Create FlexCoreByAbabilitworld instance if not exist.
			 */
			public static function instance() 
			{
				static $instance = false;

				if ( ! $instance ) 
				{
					$instance = new self();
				}

				return $instance;
			}
	
		}

        //new WpErrorHandler();
	
		/**
		 * Return the instance
		 *
		 * @return Ababilitworld\FlexCoreByAbabilitworld\Core\Library\Function\WpErrorHandler
		 */
		function wp_error_handler() 
		{
			return WpErrorHandler::instance();
		}
	
		// take off
		//wp_error_handler();
		
	}
	
?>