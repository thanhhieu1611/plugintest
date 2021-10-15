<?php 
/**
 * @package AlecadddPlugin
*/

// Declare namespace for this class using composer autoload
// Inc is the autoload which has been declared in composer.json
namespace Inc\Base;

// // This class use without declare of namespace
// class AlecadddPluginDeactivate {
//     public static function deactivate(){
//         flush_rewrite_rules();
//     }
// }

// This class use with declaration of namespace
class Deactivate {
    public static function deactivate(){
        flush_rewrite_rules();
    }
}

