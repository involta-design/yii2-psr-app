<?php

use yii\helpers\ArrayHelper;
use yii\Psr7\web\Request;
use yii\Psr7\web\Response;

$common = require __DIR__ . '/common.php';

$config = [
    'id' => 'web',
    "controllerNamespace" => 'App\Controllers',
    'runtimePath' => '@root/runtime/web',
    'components' => [
        'request' => [
            'cookieValidationKey' => '123',
            'class' => Request::class,
        ],
        'response' => [
            'class' => Response::class
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],
        'view' => [
            'theme' => [
                'basePath' => '@resources/web',
                'baseUrl' => '@web',
                'pathMap' => [
                    '@App/views' => '@resources/web/views',
                ],
            ],
        ],
    ],
];

return ArrayHelper::merge($common, $config);