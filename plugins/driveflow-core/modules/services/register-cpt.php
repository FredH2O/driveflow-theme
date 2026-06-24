<?php

// driveflow's "services" custom post type for adding services

function driveflow_register_services_cpt()
{
    $labels = [
        'name' => 'Services',
        'singular_name' => 'Service',
        'add_new' => 'Add Service',
        'add_new_item' => 'Add New Service',
    ];

    register_post_type(
        'service',
        [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'rest_base' => 'services',
            'supports' => ['title', 'thumbnail'],
            'rewrite' => false,
            'has_archive' => false,
            'publicly_queryable' => true,
            'menu_icon' => 'dashicons-table-col-before',
        ]
    );
}

add_action('init', 'driveflow_register_services_cpt');
