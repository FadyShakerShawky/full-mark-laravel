<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

     public function users()
    {
        return $this->belongsTo(User::class,"user_id", "id");
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class , 'course_teachers');
    }
}