<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'bootstrap' => [
        'chiliec\vote\components\VoteBootstrap',
    ],
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
        'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'images/store', //path to origin images
            'imagesCachePath' => 'images/cache', //path to resized copies
            'graphicsLibrary' => 'Imagick', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/images/placeHolder.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
        ],
        'vote' => [
            'class' => 'chiliec\vote\Module',
            // global values for all models
            // 'allowGuests' => true,
            // 'allowChangeVote' => true,
            'models' => [
                // example declaration of models
                // \common\models\Post::className(),
                // 'backend\models\Post',
                // 2 => 'frontend\models\Story',
                // 3 => [
                //     'modelName' => \backend\models\Mail::className(),
                //     you can rewrite global values for specific model
                //     'allowGuests' => false,
                //     'allowChangeVote' => false,
                // ],
            ],
        ],
    ],
    'aliases' => [
        '@mdm/admin' => '@vendor/mdmsoft/yii2-admin',
        '@funson86/setting' => '@vendor/funson86/setting',
        // for example: '@mdm/admin' => '@app/extensions/mdm/yii2-admin-2.0.0',
    ],
];
