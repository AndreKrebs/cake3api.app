<?php

// ROLE
// 1 - user
// 2 - admin

$config = [
    'SimpleRbac' => [
        'actionMap' => [
            'Cocktails'=> [
                '*'  => [1, 2]
            ]
        ]
    ]
];

