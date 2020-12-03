<?php

/**
 * Plugin Name: i400-plugin
 * Author: Patrick Caldwell
 * Aurthor URI: http://patrickdcaldwell.com/
 * Version: 1.0.0
 */

add_action('the_title', 'add_n413_to_title');

function add_n413_to_title($title)
{
    return $title .= '<p style="font-size: 2rem; font-weight: initial">N413</p>';
}
