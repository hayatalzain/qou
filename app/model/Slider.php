<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
   protected $table='slider';
    protected $fillable = [
        "details",
        "title",
        "image",
        "link",
    ];

}
