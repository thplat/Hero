<?php namespace Hero\Session\Handlers;

use DomainException;
use Hero\Events\Dispatcher;
use Illuminate\Auth\AuthManager;
use Hero\CommandBus\HandlerInterface;
use Hero\CommandBus\CommandInterface;
use Illuminate\Hashing\HasherInterface AS Hash;

class AttemptLoginHandler implements HandlerInterface {

    private $command;
    private $auth;
    private $hash;

    public function __construct(AuthManager $auth, Hash $hash)
    {
        $this->auth = $auth;
        $this->hash = $hash;
    }

    public function handle(CommandInterface $command)
    {
        $this->command = $command;
        $this->signIn($command);
    }

    public function signIn($command)
    {
        if( !$this->auth->attempt(['email' => $command->email, 'password' => $command->password ]) )
        {
            throw new DomainException('Sorry. Wrong credentials!');
        }
    }

}