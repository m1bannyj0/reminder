<?php
declare(strict_types=1);
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);

use App\bootstrap;
use App\exceptionHandler;

require_once __DIR__.'/../vendor/autoload.php';

set_exception_handler(function ($exception) {
    $handler = new exceptionHandler($exception);
    $handler->handle();
});

$bootstrap = new bootstrap();
//$bootstrap->run($_SERVER);
