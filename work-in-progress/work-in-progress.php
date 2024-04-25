<?php
/*
Plugin Name: Work In Progress Plug-in
Plugin URI: https://esterenkodesign.com
Description: Displays a banner at the top of a website declaring it to be a test site.
Version: 1.0.1
Author: Kirk Esterline
Author URI: https://esterenkodesign.com
*/

// Exit if accessed directly

if(!defined('ABSPATH')) {
    exit;
}

// Hooking into WP as soon as the 'body' opens and adding a simple element and style.

add_action('wp_body_open', 'tb_head');
add_action('wp_print_styles', 'tb_css');

function tb_head()
{
    echo '<h1 class="tb">This is a test site!</h1>';
}

function tb_css()
{
    echo '
        <style>
            h1.tb {
                color: #000;
                text-align: center;
                background: yellow;
                padding: .25em 0;
            }
        </style>
    ';
}