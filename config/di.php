<?php

use Monolog\Logger;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Yiisoft\Aliases\Aliases;

return [
    ContainerInterface::class => static function (ContainerInterface $container) {
        return $container;
    },
    Aliases::class => new Aliases(require __DIR__ . '/aliases.php'),
    LoggerInterface::class => static function (ContainerInterface $container) {
        $aliases = $container->get(Aliases::class);

        $handlers = require __DIR__ . '/logger.php';
        return new Logger('yii_app', $handlers);
    }
];