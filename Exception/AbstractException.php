<?php

namespace ElusiveDocks\LaunchPad\Exception;

use ElusiveDocks\LaunchPad\Contract\ExceptionInterface;

/**
 * Class AbstractException
 * @package ElusiveDocks\LaunchPad\Exception
 */
abstract class AbstractException extends \Exception implements ExceptionInterface
{
    /**
     * @return string
     */
    public function __toString()
    {
        return parent::__toString();
    }
}
