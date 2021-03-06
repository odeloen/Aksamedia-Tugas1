<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function articles(){
        return $this->belongsToMany('App\Article','article_categories');
    }
}
