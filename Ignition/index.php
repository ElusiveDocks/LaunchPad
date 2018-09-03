<?php

use ElusiveDocks\Reporter\Source\Reporter;
use ElusiveDocks\Router\Source\Transfer\GenericRequest;
use ElusiveDocks\Router\Source\Transfer\GenericTransfer;

require_once(
    __DIR__ . DIRECTORY_SEPARATOR .
    '..' . DIRECTORY_SEPARATOR .
    'bootstrap.php'
);

Reporter::enableHandler(
    Reporter::createHtmlHandler()
);

$routerTransfer = new GenericTransfer();
$routerRequest = new GenericRequest();
$routerResponse = $routerTransfer->handle(
    $routerRequest->capture()
);
$routerResponse->send();
