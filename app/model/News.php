<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
   protected $table='news';
    protected $fillable = [
        "details",
        "title",
        "image",
        "link",
    ];

}
