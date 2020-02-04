<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = ['advertisement_id', 'advertisement_image_path', 'advertisement_image_caption'];

    protected $table = 'advertisement_images';

    public function advertisement()
    {
        return $this->belongsTo('App\Advertisement');
    }
}
