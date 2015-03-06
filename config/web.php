<?php

$config = [
    'id' => 'app',
    'components' => [
        'assetManager' => [
            'linkAssets' => true,
        ],
        'view' => [
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => [
                        'auto_reload' => true,
                    ],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                '' => '/site/index',
                // modules
                ['pattern' => '<module:(admin)>/<controller:[\w\-]+>/<action:[\w\-]+>/<id:\d+>', 'route' => '/<module>/<controller>/<action>'],
                ['pattern' => '<module:(admin)>/<controller:[\w\-]+>/<action:[\w\-]+>', 'route' => '/<module>/<controller>/<action>'],
                ['pattern' => '<module:(admin)>/<controller:[\w\-]+>', 'route' => '/<module>/<controller>'],
                ['pattern' => '<module:(admin)>', 'route' => '/<module>'],
            ],
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

return $config;
