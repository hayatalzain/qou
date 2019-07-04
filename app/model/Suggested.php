<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Suggested extends Model
{
   protected $table='suggested';
    protected $fillable = [
        "name",
        "email",
        "name",
        "mobile",
    ];

}
