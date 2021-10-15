<?php 
/**
 * @package AlecadddPlugin
*/

// Declare namespace for this class using composer autoload
// Inc is the autoload which has been declared in composer.json
namespace Inc\Pages;

class Admin {

    public function register () {
        // Add administration menu
        add_action( 'admin_menu', array ( $this, 'add_admin_pages') );
    }

    // Add menu page inside dashboard
    public function add_admin_pages() {
        add_menu_page( 'Alecaddd Plugin', 'Alecaddd', 'manage_options', 'alecaddd_plugin', array( $this, 'admin_index'), 'dashicons-admin-generic', 110);
    }

    public function admin_index() {
        // require template for admin page
        require_once PLUGIN_PATH . 'templates/admin.php';
    }



}

