<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class LoggerFactory {
    public static function createLogger() {
        $logger = new Logger('app_logger');
        $logger->pushHandler(new StreamHandler(__DIR__ . '/logs/app.log', Logger::DEBUG));
        return $logger;
    }
}
