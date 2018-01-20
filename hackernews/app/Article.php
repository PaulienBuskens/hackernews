<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
