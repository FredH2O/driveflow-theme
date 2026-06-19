<?php

function driveflow_register_testimonials_cpt()
{
    $labels = [
        'name' => 'Testimonials',
        'singular_name' => 'Testimonial',
        'add_new_item' => 'Add New Testimonial',
        'edit_item' => 'Edit Testimonial',
        'all_items' => 'All Testimonials',
        'menu_name' => 'Testimonials',
        'featured_image' => 'Profile image',
        'set_featured_image' => 'Set profile image',
        'remove_featured_image' => 'Remove profile image',
        'use_featured_image' => 'Use as profile image',
    ];

    register_post_type(
        'testimonial',
        [
            'labels' => $labels,
            'public' => true,
            'show_in_rest' => true,
            'rest_base' => 'testimonials',
            'supports' => ['title', 'thumbnail'],
            'rewrite' =>   ['slug' => 'testimonials'],
            'menu_icon' => 'dashicons-format-status',
        ]
    );
}

add_action('init', 'driveflow_register_testimonials_cpt');
