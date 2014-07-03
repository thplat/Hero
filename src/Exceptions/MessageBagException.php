<?php namespace Hero\Exceptions;

use Exception;
use Illuminate\Support\MessageBag;

class ErrorException extends Exception {


    public function getErrors()
    {
        return $this->getMessage();
    }

}