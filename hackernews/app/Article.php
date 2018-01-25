<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\facades\Auth;

class Article extends Model
{

    protected $fillable = ['title', 'description'];

    public function Comments(){

        return $this->hasMany(Comment::class);
    }

    public function addComment($body){

        $this->comments()->create(compact('body'));

    }

}
