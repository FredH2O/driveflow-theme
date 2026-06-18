<?php

/**
 * Plugin Name: Driveflow Core
 * Description: Core functionality for Driveflow (CPT, ACF, API).
 * Version: 1.0
 */

require_once plugin_dir_path(__FILE__) . 'modules/services/register-cpt.php';
require_once plugin_dir_path(__FILE__) . 'modules/services/admin.php';

// Allow React development server to access the REST API
add_filter('rest_pre_serve_request', function ($value) {
    header('Access-Control-Allow-Origin: http://localhost:5173');
    header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization');

    return $value;
});
