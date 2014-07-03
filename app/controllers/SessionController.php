<?php

use Hero\CommandBus\CommandBus;
use Hero\Session\Commands\AttemptLoginCommand;

class SessionController extends BaseController {

    private $bus;

    public function __construct(CommandBus $bus)
    {
        $this->bus = $bus;
    }

    public function showLogin()
    {
        return View::make('session.login');
    }

    public function login()
    {
        $command = new AttemptLoginCommand( Input::all() );

        try 
        {
            $this->bus->execute($command);
        }
        catch( DomainException $e )
        {
            return Redirect::to('/login')->withErrors( $e->getMessage() );
        }

        return Redirect::to('/dashboard');
    }

}
