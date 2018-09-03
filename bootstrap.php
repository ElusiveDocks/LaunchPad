<?php
/**
 * Prepare ElusiveDocks entry point
 */

ini_set('display_errors', 1);

if (ob_get_level() > 0) {
    ob_end_flush();
}

flush();

require_once(
    __DIR__ . DIRECTORY_SEPARATOR .
    'Vendor' . DIRECTORY_SEPARATOR .
    'autoload.php'
);
