<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comment extends Model
{
    protected $fillable = ['body','article_id'];

    public function article(){
        return $this->belongsTo(Article::class);
    }

}
