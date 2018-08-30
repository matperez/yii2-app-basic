<?php
$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'basePath' => __DIR__.'/../app',
    'runtimePath' => __DIR__.'/../runtime',
    'vendorPath' => __DIR__.'/../vendor',
    'aliases' => [
        '@templates' => '@app/templates',
    ],
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => '\yii\caching\FileCache',
            'fileMode' => 0664,
        ],
        'mailer' => [
            'class' => '\yii\swiftmailer\Mailer',
            'viewPath' => '@templates/mail',
        ],
    ],
    'params' => $params,
];

return $config;