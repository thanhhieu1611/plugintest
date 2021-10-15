<?php

/**
 * @package AlecadddPlugin
*/

// Declare namespace for this class using composer autoload
// Inc is the autoload which has been declared in composer.json
namespace Inc;

final class Init {
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services() {
        return [
            Pages\Admin::class,
            Base\Enqueue::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method of the service if it exists
     */
    public static function register_services()
    {
        // self is similar to $this, but do not need to create instance
        foreach( self::get_services() as $class){
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register' )){
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class class from the servives array
     * @return class instance new instance of the class
     */
    private static function instantiate( $class) {
        $service = new $class();

        return $service;
    }
}


// // Include namespaces after autoload
// use Inc\Activate;
// use Inc\Deactivate;


// // we need to check to make sure that we have the class before we create an instance of that class
// if( !class_exists('AlecadddPlugin') ){

//     class AlecadddPlugin 
//     {
//         public $plugin;

//         function __construct()
//         {
//             // get actual name of our plugin
//             $this -> plugin = plugin_basename(__FILE__);
//         }

//         // add action for all scripts when you want
//         function register() {
//             // enqueue in back end
//             add_action('admin_enqueue_scripts', array( $this, 'enqueue'));
//             // enqueue in front end
//             // add_action('wp_enqueue_scripts', array( $this, 'enqueue'));

//             // Add administration menu
//             add_action( 'admin_menu', array ( $this, 'add_admin_pages') );

//             // Add filter for current plgin
//             add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link'));
//         }

//         public function settings_link( $links){
//             // add custom settings link
//             $settings_link = '<a href="admin.php?page=alecaddd_plugin">Settings</a>';
//             array_push( $links, $settings_link);
//             return $links;
//         }

//         // Add menu page inside dashboard
//         public function add_admin_pages() {
//             add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index'), 'dashicons-admin-generic', 110);
//         }

//         public function admin_index() {
//             // require template for admin page
//             require_once plugin_dir_path(__FILE__) . 'templates/admin.php';
//         }

//         protected function create_post_type() {
//             // $this refer to this class, this add_action in initialization
//             add_action( 'init', array( $this, 'custom_post_type') );
//         }

//         function activate(){
//             // // generated a CPT because sometimes add_action custom_post_type may not appear
//             // $this -> custom_post_type();

//             // // flush_rewrite rule to get latest data from DB
//             // flush_rewrite_rules();

//             // or we can require from anothe file
//             // require_once plugin_dir_path(__FILE__) . 'inc/alecadd-plugin-activate.php';
//             // AlecadddPluginActivate::activate();

//             // or use namespace & composer autoload to call the function
//             Activate::activate();
//         }

//         // function deactivate(){
//         //     // flush_rewrite rule to get latest data from DB
//         //     flush_rewrite_rules();
//         // }

//         function custom_post_type(){
//             register_post_type( 'book', ['public' => true, 'label' => 'Books']);
//         }

//         function enqueue() {
//             // enqueue all our scripts
//             // we enqueue style styles.css, start from this file, then go to /assets/
//             wp_enqueue_style( 'mypluginstyle', plugins_url('/assets/styles.css', __FILE__));
//             wp_enqueue_script( 'mypluginscript', plugins_url('/assets/scripts.js', __FILE__));
//         }
//     }

//     // Create class instance
//     $alecadddPlugin = new AlecadddPlugin();

//     // Active all enqueue scripts
//     $alecadddPlugin -> register();

//     // Activation
//     // require_once plugin_dir_path(__FILE__) . 'inc/alecadd-plugin-activate.php';
//     // Use __FILE__ to register hook for this file only
//     // Second parametter needs to be a string, so we pass it by using an array
//     register_activation_hook( __FILE__, array($alecadddPlugin, 'activate') );
//     // Use static method
//     // register_activation_hook( __FILE__, array('AlecadddPluginActivate', 'activate' ) );


//     // Deactivation
//     // require_once plugin_dir_path(__FILE__) . 'inc/alecadd-plugin-activate.php';
//     // register_deactivation_hook( __FILE__, array($alecadddPlugin, 'deactivate') );
//     // Use static method
//     // register_activation_hook( __FILE__, array('AlecadddPluginDeactivate', 'deactivate' ) );
//     // or use namespace 
//     register_deactivation_hook( __FILE__, array('Deactivate', 'deactivate') );
// }