<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    public function groupstudents()
    {
        return $this->hasMany(GroupStudent::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class,"course_id", "id");
    }
    public function teacher()
    {
        return $this->belongsTo(teacher::class,"teacher_id", "id");
    }
}