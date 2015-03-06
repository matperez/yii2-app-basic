<?php

$config = [
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'enz0lu2U9xTaQmlcKUgeSP1v_XtEixxq',
        ],
    ],
];

// configuration adjustments for 'dev' environment
$config['bootstrap'][] = 'debug';
$config['modules']['debug'] = [
    'class' => 'yii\debug\Module',
    'allowedIPs' => ['*']
];

$config['bootstrap'][] = 'gii';
$config['modules']['gii'] = 'yii\gii\Module';

return $config;
