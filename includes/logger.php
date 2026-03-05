<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

class AppLogger {

    public static function getLogger() {

        $logger = new Logger('app');

        $handler = new RotatingFileHandler(
            __DIR__ . '/../logs/app.log',
            7,
            Logger::DEBUG
        );

        $logger->pushHandler($handler);

        return $logger;
    }
}
