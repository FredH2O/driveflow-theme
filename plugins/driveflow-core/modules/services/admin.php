<?php

function driveflow_service_limit_notice()
{
    $screen = get_current_screen();

    if (!$screen || $screen->post_type !== 'service') {
        return;
    }

    $count = wp_count_posts('service')->publish;

    if ($count >= 6) {
        echo '
        <div class="notice notice-warning">
          <p>
             <strong>Maximum services reached (6).</strong> 
             Delete an existing service before adding a new one.
          </p>
        </div>';
    }
}

add_action('admin_notices', 'driveflow_service_limit_notice');

function driveflow_limit_services_to_six($post_ID, $post, $update)
{

    $post_type = get_post_type($post_ID);

    if ($post_type !== 'service') {
        return;
    }

    $count = wp_count_posts('service')->publish;

    // if creating a new service AND already at limitt
    if (!$update && $count >= 6) {
        wp_die('Maximum of 6 services allowed.');
    }
}

add_action('wp_insert_post', 'driveflow_limit_services_to_six', 10, 3);
