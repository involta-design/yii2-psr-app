<?php

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/** @var \Yiisoft\Aliases\Aliases $aliases */

return [
    new StreamHandler($aliases->get('@runtime/error.log'), Logger::ERROR)
];