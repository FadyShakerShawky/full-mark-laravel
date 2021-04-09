<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupStudent extends Model
{
    use HasFactory;

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function  courseteacher()
    {
        return $this->belongsTo(CourseTeacher::class);
    }

}
