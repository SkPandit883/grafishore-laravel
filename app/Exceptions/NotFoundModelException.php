<?php
namespace App\Exceptions;

class NotFoundModelException extends \Exception
{
    public function __construct($message = 'Not Found', $code = 404, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
