<?php namespace Hero\Posts\Repos;

use Hero\Posts\Post;

class PostRepository implements PostRepositoryInterface {

    private $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function all()
    {
        return $this->post->all();
    }

}