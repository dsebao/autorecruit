<?php

// Exit if accessed directly.
defined('ABSPATH') || exit;

function sendform()
{

    //Verify the nonce added in head meta data
    verify_general_nonce();
    die();
}
add_action('wp_ajax_sendform', 'sendform');
add_action('wp_ajax_nopriv_sendform', 'sendform');
