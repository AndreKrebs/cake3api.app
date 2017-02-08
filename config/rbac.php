<?php

// ROLE
// 1 - user
// 2 - admin

$config = [
    'SimpleRbac' => [
        'actionMap' => [
            'Cocktails'=> [
                'index'  => ['1', '2']
            ]
        ]
    ]
];

