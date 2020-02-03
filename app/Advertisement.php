<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    protected $fillable = ['user_id','title', 'description', 'price', 'active'];

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function post_images()
    {
        return $this->hasMany('App\PostImage');
    }
}
