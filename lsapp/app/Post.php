<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use app\User;

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
}
