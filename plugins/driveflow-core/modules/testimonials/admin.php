<?php

function change_testimonial_title_placeholder($title)

{
    $screen = get_current_screen();

    if ($screen && $screen->post_type === 'testimonial') {
        $title = 'Enter customer name';
    }

    return $title;
}

add_filter('enter_title_here', 'change_testimonial_title_placeholder');
