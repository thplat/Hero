<?php  namespace Hero\Posts; 

use Illuminate\Support\ServiceProvider;

class PostsServiceProvider extends ServiceProvider {

    public function register()
    {
        $this->app->bind('Hero\Posts\Repos\PostRepositoryInterface', function(){
            return new \Hero\Posts\Repos\PostRepository( new \Hero\Posts\Post );
        });
    }
} 