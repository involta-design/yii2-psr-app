<?php

define('YII_DEBUG', true);

require dirname(__DIR__) . '/vendor/autoload.php';

use Involta\Yii\Psr11\Decorator\Container;
use Involta\Yii\Web\Application;
use Laminas\HttpHandlerRunner\Emitter\SapiEmitter;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;

$container = new Container(
    require __DIR__ . '/../config/di.php',
    require __DIR__ . '/../config/web.php'
);

$container = $container->get(ContainerInterface::class);

$application = $container->get(Application::class);
$request = $container->get(RequestInterface::class);
$emitter = new SapiEmitter();

try {
    $response = $application->handle($request);
    $emitter->emit($response);
} catch (\Throwable $e) {
   // echo $e->getMessage();
}