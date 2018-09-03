#!/usr/bin/env php
<?php

use ElusiveDocks\Reporter\Source\Reporter as ReporterFacade;
use ElusiveDocks\Router as Router;

require_once(
    __DIR__ . DIRECTORY_SEPARATOR .
    'bootstrap.php'
);

ReporterFacade::enableHandler(
    ReporterFacade::createTextHandler()
);

$routerTransfer = new Router\Source\Transfer\GenericTransfer();
$routerRequest = new Router\Source\Transfer\GenericRequest();
$routerResponse = $routerTransfer->handle(
    $routerRequest->capture()
);
$routerResponse->send();
