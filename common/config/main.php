<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
        ]
    ],
    'modules' => [
        /*'user' => [
            'class' => 'dektrium\user\Module',
            // you will configure your module inside this file
            // or if need different configuration for frontend and backend you may
            // configure in needed configs
        ],*/
    ],
    'aliases' => [
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
        // for example: '@mdm/admin' => '@app/extensions/mdm/yii2-admin-2.0.0',
    ],
];
