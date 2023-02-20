<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $casts = [
        'birth_date' => 'date',
    ];

    protected $appends = [
        'age',
        'course_name'
    ];

    public function course(){
        return $this->belongsTo(Course::class);
    }

    public function getAgeAttribute()
    {
        return $this->birth_date?->age;
    }

    public function currentCourse()
    {
        $courseid = $this->course_id;
        $course = Course::find($courseid);    
        return $course;
    }

    public function getCourseNameAttribute()
    {
         $course_name = $this->currentCourse()->name;
         return $course_name;
    }

}
