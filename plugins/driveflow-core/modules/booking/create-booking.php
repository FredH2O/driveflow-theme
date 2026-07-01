<?php

function driveflow_create_booking(WP_REST_Request $request)
{
    $data = $request->get_json_params();

    if (empty($data['name'])) {
        return new WP_Error(
            'missing_name',
            'Name is required.',
            ['status' => 400]
        );
    }

    if (empty($data['date'])) {
        return new WP_Error(
            'missing_date',
            'Date is required.',
            ['status' => 400]
        );
    }

    if (empty($data['time'])) {
        return new WP_Error(
            'missing_time',
            'Time is required.',
            ['status' => 400]
        );
    }

    $name = sanitize_text_field($data['name']);
    $service = sanitize_text_field($data['service']);
    $date = sanitize_text_field($data['date']);
    $time = sanitize_text_field($data['time']);

    return [
        'success' => true,
        'message' => 'Booking handler connected',
        'received' => [
            'name' => $name,
            'service' => $service,
            'date' => $date,
            'time' => $time,
        ]
    ];
}
