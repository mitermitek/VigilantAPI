<?php

namespace App\Exceptions;

use Exception;

class BadCredentialsException extends Exception
{
    public function __construct()
    {
        $this->message = 'Bad credentials.';
    }
}
