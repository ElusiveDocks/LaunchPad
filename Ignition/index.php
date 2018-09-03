<?php

require_once(
    __DIR__ . DIRECTORY_SEPARATOR .
    '..' . DIRECTORY_SEPARATOR .
    'bootstrap.php'
);

$routerTransfer = new \ElusiveDocks\Router\Source\Transfer\GenericTransfer();
$routerRequest = new \ElusiveDocks\Router\Source\Transfer\GenericRequest();
$routerResponse = $routerTransfer->handle(
    $routerRequest->capture()
);
$routerResponse->send();
