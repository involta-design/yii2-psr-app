<?php

use Psr\Log\LogLevel;
use samdark\log\PsrTarget;
use yii\log\Logger;
use yii\rbac\DbManager;

return [
    'basePath' => '@App',
    'bootstrap' => ['log'],
    'components' => [
        'authManager' => [
            'class' => DbManager::class,
        ],
        'log' => [
            'targets' => [
                [
                    'class' => PsrTarget::class,
                    'levels' => [Logger::LEVEL_ERROR, LogLevel::ERROR],
                    'addTimestampToContext' => true,
                ],
            ],
        ],
    ]
];