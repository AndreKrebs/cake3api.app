<?php

$config = [
    'SimpleRbac' => [
        /*'roles' => [
            'authors',
            'admin',
//            'user',
        ],*/
        'actionMap' => [
            'Cocktails'=> [
                '*'  => ['', 'author', 'admin']
            ]
        ]
    ]
];

