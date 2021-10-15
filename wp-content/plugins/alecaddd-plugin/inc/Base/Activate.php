<?php 
/**
 * @package AlecadddPlugin
*/

// Declare namespace for this class using composer autoload
// Inc is the autoload which has been declared in composer.json
namespace Inc\Base;

// This class use without declare of namespace
// class AlecadddPluginActivate {
//     public static function activate(){
//         flush_rewrite_rules();
//     }
// }

// This class use with declaration of namespace
// the name of this class and the file name should be the same
class Activate {
    public static function activate(){
        flush_rewrite_rules();
    }
}

