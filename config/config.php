<?php

return [
    /**
     * Our Seasons Config
     *
     * Winter Season - Between 1st December to 31st December
     *
     * @var boolean
     */
    'seasons' => [
        'spring' => [
            'active' => false,
            'between' => [
                '1st March',
                '31st May',
            ]
        ],
        'summer' => [
            'active' => false,
            'between' => [
                '1st June',
                '31st August',
            ]
        ],
        'autumn' => [
            'active' => false,
            'between' => [
                '1st September',
                '31st November',
            ]
        ],
        'winter' => [
            'active' => false,
            'between' => [
                '1st December',
                '29th February',
            ]
        ],
    ]
];
