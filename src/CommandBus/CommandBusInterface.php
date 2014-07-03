<?php namespace Hero\CommandBus;

interface CommandBusInterface {

    public function execute(CommandInterface $command);

}