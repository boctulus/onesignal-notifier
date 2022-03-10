<?php

/*
Plugin Name: OneSignal Notifier
Description: Alternativa a "OneSignal Notifications" de OneSignal
Version: 1.0.0
Author: boctulus@gmail.com <Pablo>
*/

namespace boctulus\OnesignalNotifier;

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

require __DIR__ . '/config.php';

function enqueue_sdk() { 
    require __DIR__ . '/onesignal_sdk.php';
}
 
add_action( 'wp_footer', 'boctulus\OnesignalNotifier\enqueue_sdk' );

?>

