<?php namespace Hero\CommandBus;

interface HandlerInterface {

    public function handle(CommandInterface $command);

}