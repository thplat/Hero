<?php namespace Hero\CommandBus;

use Illuminate\Container\Container;

class CommandBus implements CommandBusInterface {

    protected $container;
    protected $inflectior;

    public function __construct(Container $container, CommandNameInflector $inflector)
    {
        $this->container = $container;
        $this->inflector = $inflector;
    }

    public function execute(CommandInterface $command)
    {
        return $this->getHandler($command)->handle($command);
    }

    protected function getHandler(CommandInterface $command)
    {
        return $this->container->make( $this->inflector->getHandler($command) );
    }

}