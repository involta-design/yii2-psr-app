<?php

use Involta\Yii\Web\Application;
use Laminas\Diactoros\Response;
use Laminas\Diactoros\ServerRequestFactory;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

return [
    Application::class => static function (ContainerInterface $container) {
        $config = require __DIR__ . '/web-app.php';

        if(!isset($config['container'])) {
            $config['container'] = $container;
        }

        return new Application($config);
    },
    RequestInterface::class => static function () {
        return ServerRequestFactory::fromGlobals();
    },
    ResponseInterface::class => Response::class
];