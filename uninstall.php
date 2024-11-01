<?php
// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    die;
}

global $workadu_global_series_options, $workadu_global_payment_type_options, $workadu_global_meta_post_data;
// Remove global data
unset($workadu_global_series_options);
unset($workadu_global_payment_type_options);
unset($workadu_global_meta_post_data);

