<?php namespace Hero\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public function user()
    {
        return $this->belongsTo('Hero\User\User');
    }

}