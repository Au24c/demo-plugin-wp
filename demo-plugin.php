<?php
/*
 * Plugin Name:       My Demo Plugin
 * Plugin URI:        https://github.com/Au24c/demo-plugin-wp.git
 * Description:       A simple demo plugin to showcase WordPress plugin development.
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.2
 * Author:            Arshi Usmani
 * Author URI:        https://github.com/Au24c
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       my-demo-plugin
 * Domain Path:       /languages
    */
    

 register_activation_hook(
	__FILE__,
	'mdp_activation'
);

function mdp_activation() {
   
    // You can add code here to run on plugin activation, like creating database tables or setting default options.
}

register_deactivation_hook(
    __FILE__,
    'mdp_deactivation'
);

function mdp_deactivation() {

    // You can add code here to run on plugin deactivation, like deleting database tables or resetting options.
}