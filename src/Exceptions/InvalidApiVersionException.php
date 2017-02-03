<?php

namespace Zarlach\TwitchApi\Exceptions;

use Exception;

class InvalidApiVersionException extends Exception
{
    public function __construct()
    {
        $this->message = 'Invalid Twitch API version. Only v3 and v5 are supported';
    }
}
