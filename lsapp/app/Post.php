<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User;
use App\Comment;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    // Primary Key
    protected $key = 'id';
    // TimeStamps
    public $timeStamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments(){
        return $this->morphMany('App\Comment', 'commentable');
    }
}
