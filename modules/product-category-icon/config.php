<?php

return [
    '__name' => 'product-category-icon',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/product-category-icon.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/product-category-icon' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'product-category' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'product-category' => [
                'icon' => [
                    'type' => 'text'
                ]
            ]
        ]
    ]
];