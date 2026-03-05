<?php

require_once 'logger.php';

class ErrorHandler {

    public static function handleException($exception) {

        $logger = AppLogger::getLogger();

        $errorId = uniqid("ERR_");

        $logger->error("[$errorId] " . $exception->getMessage());

        echo "Сталася помилка. Код помилки: $errorId";
    }

}
