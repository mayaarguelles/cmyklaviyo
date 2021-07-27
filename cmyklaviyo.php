<?php
/*
 * Plugin Name: CMYKlaviyo
 * Plugin URI: https://wearecmyk.com/
 * Description: Allows for Klaviyo management from inside of Wordpress.
 * Author: CMYK
 * Author URI: https://wearecmyk.com/
 * Version: 0.0.2
 * Text Domain: cmyklavyiyo
 * Requires PHP: 5.6
 * Requires at least: 5.4
 */

 require('vendor/autoload.php');

 $repo = 'team_cmyk/cmyklaviyo';                 // name of your repository. This is either "<user>/<repo>" or "<team>/<repo>".
 $bitbucket_username = 'mayaarguelles';   // your personal BitBucket username
 $bitbucket_app_pass = '3ta3nvdwVbseDhrn6UDY';   // the generated app password with read access

 new \Maneuver\BitbucketWpUpdater\PluginUpdater(__FILE__, $repo, $bitbucket_username, $bitbucket_app_pass);


 /*--------------------------------*\
   CMYK x KLAVIYO PLUGIN
 \*--------------------------------*/

class CMYKlaviyo_Plugin {

    /**
     * Initializes the plugin.
     *
     * To keep the initialization fast, only add filter and action
     * hooks in the constructor.
     */
    public function __construct() {
    	add_action( 'acf/init', array( $this, 'register_cmyklaviyo_blocks' ) );
    }

    /**
     * Plugin activation hook.
     *
     * Creates all WordPress pages needed by the plugin.
     */
    public static function plugin_activated() {
      // do something once when plugin is activated 
    }

    /*
     * Adds ACF blocks to the gutenberg editor.
     */
    public function register_rko_blocks() {
      if ( function_exists('acf_add_local_field_group') ) {
        // add fields
      } if ( function_exists('acf_register_block') ) {
        // add blocks
      }
    }

  }

  // Initialize the plugin
  $cmyklaviyo_plugin = new CMYKlaviyo_Plugin();

  // Create the custom pages at plugin activation
  register_activation_hook( __FILE__, array( 'CMYKlaviyo_Plugin', 'plugin_activated' ) );
