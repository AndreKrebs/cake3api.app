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
                '*'  => ['user', 'author', 'admin']
            ]
        ]
    ]
];

