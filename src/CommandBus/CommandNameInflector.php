<?php namespace Hero\CommandBus;

class CommandNameInflector {

    public function getHandler(CommandInterface $command)
    {
        return str_replace('Command', 'Handler', get_class($command));
    }

}