#!/usr/bin/env php
<?php

require_once(
    __DIR__ . DIRECTORY_SEPARATOR .
    'bootstrap.php'
);

$eventDispatcher = new \ElusiveDocks\Dispatcher\Source\Dispatcher\GenericDispatcher();

$routerTransfer = new \ElusiveDocks\Router\Source\Transfer\GenericTransfer();
$routerRequest = new \ElusiveDocks\Router\Source\Transfer\GenericRequest();

$routerResponse = $routerTransfer->handle(
    $routerRequest->capture()
);

$routerResponse->send();
