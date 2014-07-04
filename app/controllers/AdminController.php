<?php

use Hero\CommandBus\CommandBus;
use Hero\Posts\Commands\ViewAllPostsCommand;

class AdminController extends Controller {

    protected $bus;

    public function __construct(CommandBus $bus)
    {
        $this->bus = $bus;
    }

    public function showDashboard()
    {
        $command = new ViewAllPostsCommand();

        try
        {
            $posts = $this->bus->execute($command);
            dd($posts);
        }
        catch( DomainException $e )
        {
            dd("SOMETHING WENT WRONG");
        }

        //return View::make('admin.dashboard');
    }

}