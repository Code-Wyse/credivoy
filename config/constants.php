<?php
return [
    'contact' => [
        'email' => 'info@earthtrektours.com',
        'phone' => '+923125040558',
        'address' => 'Mini Market, Phase-II, Defence View, Karachi. '
    ],
    'sales' => [
        'email' => 'sales@earthtrektours.com'
    ],
    'booking' => [
        'statuses' => [
            ['label' => 'Pending','value' => 'pending'],
            ['label' => 'Confirmed','value' => 'confirmed'],
            ['label' => 'Advance Deposited','value' => 'advance_deposited'],
        ]
    ],
    'yes_no_options' => [
        ['label' => 'Yes','value' => 1],
        ['label' => 'No','value' => 0]
    ],
    'permissions' => [
        'hotel_manager' => [
            'label' => 'Hotel Manager',
            'value' => 'hotel_manager'
        ],
        'tour_manager' => [
            'label' => 'Tour Manager',
            'value' => 'tour_manager'
        ],
        'blog_manager' => [
            'label' => 'Blog Manager',
            'value' => 'blog_manager'
        ],
        'destination_manager' => [
            'label' => 'Destination Manager',
            'value' => 'destination_manager'
        ]
    ]
];
