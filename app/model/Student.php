<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $table='student';
    protected $fillable = [
        "name",
        "gender",
        "email",
        "mobile",
        "id_number",
        "address",
        "degree_id",
        "date_of_birth",
        "course_id",
        "coach_id",
//        "active"
    ];

//    function degreeRelation(){
//        //Table                                              Foreign Key   Primary Key
//        return $this->hasMany(Degree::class, "degree_id", "id");
////    }
    function coachRelation(){
        //Table                                           Foreign Key   Primary Key
        return $this->belongsTo(Degree::class, "degree_id", "id");
    }

    public function coursesTitle()
    {
        return $this->belongsTo(Courses::class,'course_id','id');
    }

    public function coachesTitle()
    {
        return $this->belongsTo(Coach::class,'coach_id','id');
    }

}
