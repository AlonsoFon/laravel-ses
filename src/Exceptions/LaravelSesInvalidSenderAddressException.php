<?php

declare(strict_types=1);

namespace Juhasev\LaravelSes\Exceptions;

use Exception;

class LaravelSesInvalidSenderAddressException extends LaravelSesException
{
    // Redefine the exception so message isn't optional
    public function __construct($message, $code = 0, Exception $previous = null)
    {

        // make sure everything is assigned properly
        parent::__construct($message, $code, $previous);
    }

    // custom string representation of object
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
