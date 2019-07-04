<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
   protected $table='advertising';
    protected $fillable = [
        "details",
        "title",
        "image",
        "link",
    ];

}
