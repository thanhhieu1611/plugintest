<?php 
/**
 * @package AlecadddPlugin
*/

// Declare namespace for this class using composer autoload
// Inc is the autoload which has been declared in composer.json
namespace Inc\Base;

// This class use with declaration of namespace
// the name of this class and the file name should be the same
class Enqueue {
    function register() {
        // enqueue in back end
        add_action('admin_enqueue_scripts', array( $this, 'enqueue'));
        // // enqueue in front end
        // add_action('wp_enqueue_scripts', array( $this, 'enqueue'));
    }

    function enqueue() {
        // enqueue all our scripts
        // we enqueue style styles.css, start from this file, then go to /assets/
        wp_enqueue_style( 'mypluginstyle', PLUGIN_URL . '/assets/styles.css');
        wp_enqueue_script( 'mypluginscript', PLUGIN_URL .'/assets/scripts.js');
    }
}

