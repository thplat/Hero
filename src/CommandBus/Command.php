<?php namespace Hero\CommandBus;

use Exception;
use Hero\Exceptions\MessageBagException;

class CommandPropertyNotFoundException extends Exception {};

abstract class Command {

    public $data;

    public function __construct(Array $data)
    {
        $this->data = $data;
    }

    public function __get($property)
    {
        if( !isset($this->data[$property]) )
        {
            throw new CommandPropertyNotFoundException("Property: >>[" . $property . "]]<< could not be found in " . get_class($this));
        }
        return $this->data[$property];

    }

}

