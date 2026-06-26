<?php

function driveflow_register_booking_cpt()
{
    $labels = array(
        'name' => 'Bookings',
        'singular_name' => 'Booking',
        'add_new' => 'Add Booking'
    );

    register_post_type(
        'booking',
        array(
            'labels' => $labels, // controls what shows in the UI
            'public' => true, // shows in the admin dashboard, access via REST API , queriable? !
            'show_in_rest' => true, // exposes this CPT to wordpress REST API
            'rest_base' => 'bookings', // endpoint /wp-json/wp/v2/bookings
            'support' => array('title'), // post title
            'menu_icon' => 'dashicons-calendar' // dashboard icon
        )
    );
}

add_action('init', 'driveflow_register_booking_cpt');
