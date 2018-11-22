<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'body'
    ];
    public function categories(){
        return $this->belongsToMany('App\Category','article_categories');
    }
}
