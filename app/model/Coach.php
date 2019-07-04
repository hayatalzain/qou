<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
   protected $table='coach';
    protected $fillable = [
        "name",
        "gender",
        "email",
        "mobile",
        "id_number",
        "address",
        "degree_id",
        "note",
        "active"
    ];
//    function degreeRelation(){
//        //Table                                              Foreign Key   Primary Key
//        return $this->hasMany(Degree::class, "degree_id", "id");
//    }
    function coachRelation(){
        //Table                                           Foreign Key   Primary Key
        return $this->belongsTo(Degree::class, "degree_id", "id");
    }
//    function coursessRelation(){
//        //Table                                           Foreign Key   Primary Key
//        return $this->belongsTo(Courses::class, "id", "coach_id");
//    }
}
