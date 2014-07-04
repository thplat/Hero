<?php namespace Hero\Posts\Handlers;

use DomainException;
use Hero\Events\Dispatcher;
use Illuminate\Auth\AuthManager;
use Hero\CommandBus\HandlerInterface;
use Hero\CommandBus\CommandInterface;
use Illuminate\Hashing\HasherInterface AS Hash;

use Hero\Posts\Repos AS Repos;

class ViewAllPostsHandler {

    private $posts;

    public function __construct(Repos\PostRepositoryInterface $posts)
    {
        $this->posts = $posts;
    }

    public function handle(CommandInterface $command)
    {
        return $this->posts->all();
    }

}
