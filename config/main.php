<?php
$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

$config = [
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
        'redactor' => [
            'class'=>'yii\redactor\RedactorModule',
            'uploadDir'=>'@web/uploads',
            'uploadUrl'=>'/uploads',
        ],
    ],
    'components' => [
        'cache' => 'yii\caching\FileCache',
    ],
    'params' => $params,
];

return $config;